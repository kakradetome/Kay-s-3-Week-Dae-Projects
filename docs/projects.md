---
layout: default
title: "Projects"
permalink: /projects/
---

{% include brand.html %}
{% include nav.html %}

## Secure File Storage System
**Problem:** Sensitive files stored without encryption or consistent access controls.  
**Solution:** Client‑side encryption (KMS), RBAC with signed URLs, audit logging.  
**Outcome:** 0 critical misconfigurations in 90 days; automated compliance export.

<img src="{{ '/assets/img/dae-logo.png' | relative_url }}" alt="Project diagram placeholder" width="640" style="border-radius:12px;margin:8px 0;"/>

**Tech:** Go, AWS S3 + KMS, Terraform, OPA  
**Links:** [Source](https://github.com/YOUR-USERNAME/secure-file-storage) · [Demo](#)

---

## API Hardening Program
**Problem:** Inconsistent API security across services.  
**Solution:** ASVS‑aligned checklists, gateway policies (authn, rate limiting, schema validation), CI security gates.  
**Outcome:** 70% fewer high‑risk findings in two sprints.

**Tech:** TypeScript, OWASP ASVS, GitHub Actions

{% include footer-note.html %}
