<?php



function createToken()
{
  return hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . date('Y-M'));
}

function checkToken(string $token)
{
  return $token == createToken();
}

echo createToken();
