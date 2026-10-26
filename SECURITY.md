# Security

## Critical PHP vulnerabilities ("php2shell"): CVE-2026-109618 / CVE-2026-109619

Disclosed 21 October 2026. Both are CVSS 9.2 unauthenticated remote code execution
flaws in the PHP runtime itself.

| CVE | Issue |
| --- | --- |
| CVE-2026-109618 | RCE via memory corruption during out-of-memory (OOM) handling |
| CVE-2026-109619 | RCE via stale global state / use-after-free between requests |

- **Affected:** all PHP versions 5.4 through 8.5.11, on every SAPI that serves web
  requests (mod_php, PHP-FPM, php-cgi, LiteSpeed, FrankenPHP). mod_php is highest risk.
- **Fixed in:** PHP **8.5.12**, **8.4.27**, **8.3.36**, **8.2.35**.
- **EOL:** PHP 8.1 and older will not receive fixes and must be migrated to 8.2.35+.
- A third RCE, CVE-2026-115560, only affects unusual configurations; PHP is not
  issuing an out-of-band release for it. Upgrading as above is still required.

**These cannot be fixed in this repository.** The fix is upgrading the PHP runtime
on the server that hosts the site (cPanel MultiPHP Manager or hosting support).

## cPanel upgrade runbook

1. Log in to cPanel.
2. Open **MultiPHP Manager** (some hosts label it **Select PHP Version**).
3. Select the domain that serves this site.
4. Choose a patched version: **8.3.36** (recommended), **8.4.27**, or **8.5.12**.
   Do not select anything below 8.2.35.
5. Apply.
6. Verify the active version:
   - SSH: `php -v`
   - No SSH: create a temporary `version-check.php` in the docroot containing
     `<?php echo PHP_VERSION;`, load it in the browser, then **delete it**.
7. Smoke test: load the site, submit the booking form, confirm the success alert,
   the redirect back to the page, and delivery of the admin/user emails.

**Rollback:** MultiPHP Manager → select the previous version → Apply.

No application code changes are required: the codebase was audited and is
compatible with PHP 8.2–8.5 (no removed/deprecated constructs; `mysqli` prepared
statements only).

## Interim mitigation

`.htaccess` sets `LimitRequestBody 1048576` (1 MB), reducing the request-size
surface that can drive PHP into the OOM path exploited by CVE-2026-109618.
This is defence in depth only and does **not** fix the vulnerability.

If the host disables `LimitRequestBody` via `AllowOverride`, ask them to apply it
or enforce a request-body limit at the reverse proxy / WAF.

## Handoff message for the cPanel account holder / hosting support

> **Subject:** Urgent: patch PHP for CVE-2026-109618 / CVE-2026-109619
>
> On 21 October 2026 the PHP project disclosed two critical unauthenticated
> remote code execution vulnerabilities, CVE-2026-109618 and CVE-2026-109619
> (CVSS 9.2, "php2shell"). They affect all PHP versions from 5.4 through 8.5.11,
> including PHP-FPM and mod_php. CISA and CERT-EU recommend patching
> internet-facing systems immediately.
>
> Please upgrade the PHP version serving the Skywave website to one of:
>
> - PHP 8.5.12
> - PHP 8.4.27
> - PHP 8.3.36
> - PHP 8.2.35
>
> PHP 8.1 and older are end-of-life and will not be patched, so 8.2.35 or newer
> is required. The website code has been audited and is compatible with PHP
> 8.2–8.5; no application changes are needed. After the upgrade, please confirm
> the active version so we can run verification tests.

## References

- PHP security releases: https://www.php.net/archive/2026.php
- CISA alert: https://www.cisa.gov/news-events/alerts/2026/10/21/critical-vulnerabilities-php-require-immediate-patching
- CERT-EU advisory: https://www.cert.europa.eu/publications/security-advisories/2026-018/
