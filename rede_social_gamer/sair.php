<?php
session_destroy();

header('Location: index.php', true, 301);