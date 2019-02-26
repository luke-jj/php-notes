# Cookies and Sessions
HTTP is stateless
-> cookies save state as text on the client-side.
-> sessions save state on the server-side.

Cookies and sessions are transmitted in the http header.

State can also be transmitted to destination resources using html with the <intput type="hidden"> element.

Use case for cookies:
- Shopping Cart System

Use Case for Sessions:
- Login System


**use a cookie banner for legal reasons.**

## Cookie Specifications
Browsers are supposed to save at least 300 cookies, 30 per domain, 4096 Bytes per cookie.

Cookies can only be read by the domain that set the cookie initially.

Cookies are only send in the http header not in the body.

## Cookies in PHP

    $_COOKIES[]

setcookie("name", "value", expirationdate, "path", "domain", connectiontype, httpreadonly)

    name              cookiename
    value             cookietext
    expirationdate    timestamp
    path              cookie is only valid for the given path
    domain            cookie is only valid for the given domain
    connectiontype    {bool} - https or https
    httpreadonly      {bool} - can only be read by http and not by javascript


cookies are read from the `$_COOKIES` associative array.

### Deleting Cookies
Cookies are deleted by setting a cookie with the same name and an expirationdate
from the past.

    # delete cookie with for 'name'
    setcookie('name', "", time()-42000, "/");

    # delete cookie for a session
    setcookie(session_name(), "", time()-42000, "/");

## Sessions
Session data is saved on the serverside. Clients are mapped to the session data
with a cookie saved on the clientside.

To save values in a session, simply save them as a new element in the
`$_SESSION` array.
Any page that uses the session has to begin with `session_start()`

```
    session_start()             should be placed before any html elements
    $_SESSION                   associative array holding session info
```

If cookies are deactivated sessions won't work.
Transmitting the session id through links and http methods is not advisable,
due to security concerns.

## Password Hashing

	password_hash("password", PASSWORD_DEFAULT) -> string
	password_verify("password", password_hash) -> bool
	password_get_info()
