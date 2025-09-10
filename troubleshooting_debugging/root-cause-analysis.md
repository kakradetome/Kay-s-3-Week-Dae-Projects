# Root-Cause Analysis Template (with Examples)

Use this file to document a bug, mistake, or issue you discovered and fixed — something small but worth learning from.

Write 2–5 bullet points in each section.

Think of it like a short story:  
What happened → Why it happened → The fix → The prevention

---

## What Happened

> What was the bug or problem?  
> How was it discovered (test, alert, log, review)?  
> What system, file, or feature was affected?

**Example:**

-   API call to `/users/:id` returned a 500 error when given invalid UUIDs.
-   Discovered during Postman testing before staging deploy.
-   Affected the dev environment; not yet deployed to production.

---

## Why It Happened

> What was the root cause — not just the symptom?  
> Was something missing (validation, config, logic)?  
> Any assumptions that turned out false?

**Example:**

-   Invalid UUIDs were passed directly into the database query.
-   No input validation caused the database to throw a parsing error.
-   No test cases for malformed input — edge case was missed.

---

## The Fix

> What did you change to fix it?  
> Code, config, logic, or tools?  
> Link to the commit / PR if available.

**Example:**

-   Added middleware using `express-validator` to validate UUIDs.
-   Wrote unit tests to handle bad input.
-   PR: https://github.com/org/project/pull/248

---

## Prevention

> How will we prevent this from happening again?  
> New test, check, tool, or habit?  
> What will you or others do differently?

**Example:**

-   Created shared middleware to validate UUIDs across all routes.
-   Added bad-input scenarios to test suite.
-   Shared fix and pattern with the team during sync.

---

Keep it short. Keep it clear.  
Use your real bug as the example.  
Help others avoid the same issue later.
