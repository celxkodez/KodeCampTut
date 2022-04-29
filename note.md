Basic PHP (PHP Sessions & Packages in composer)

PHP Sessions
A session is a way to store information to be used accross multiple pages. (multi variable).

session is different from cookies.
sessions is not stored in the user pc.

session_start();
$userData = [
  'name' => 'celestine stephen',
  'email' => 'celestine.stephen@email.com'
]
$_SESSION['user'] = $userData;
$_SESSION

session_unset()
session_destroy();