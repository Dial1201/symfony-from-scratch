<?php

use Symfony\Component\HttpFoundation\Response;

$name = $request->query->get('name', 'World');

?>
Hello<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>