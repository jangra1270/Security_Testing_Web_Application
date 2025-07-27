# 🔐 Security Report

## 1. SQL Injection

**Test URL:** `/login.php`  
**Payload:** `' OR '1'='1`

**Impact:**  
- Unauthorized login  
- Access to user data

**Fix:**  
- Use **prepared statements**  
- Validate user input

---

## 2. Cross-Site Scripting (XSS)

**Test URL:** `/comment.php`  
**Payload:** `<script>alert('XSS')</script>`

**Impact:**  
- Steal cookies  
- Redirect users

**Fix:**  
- Escape special characters  
- Use Content Security Policy (CSP)
