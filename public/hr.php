<?php
# Antes de configurar zona horaria
echo "\n\nFecha y hora actual: " . date("Y-m-d H:i:s");
# Configurar
date_default_timezone_set("America/Mexico_City");
# Después de configurar
echo "\n\nFecha y hora actual: " . date("Y-m-d H:i:s");