<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$empleados = [
    ['nombre' => 'Ariana', 'sueldo' => 3090],
    ['nombre' => 'Castro', 'sueldo' => 4500],
    ['nombre' => 'Kendrick', 'sueldo' => 2000],
    ['nombre' => 'Orlando', 'sueldo' => 1500],
    ['nombre' => 'Mañan', 'sueldo' => 6,000],
];

// Ordenar el arreglo por sueldo
uasort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos originales
echo "Sueldos de empleados: <br>";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

echo "<p>";

// Agregar 2 empleados más
array_push($empleados, ['nombre' => 'Castro', 'sueldo' => 4500 ]);
array_push($empleados, ['nombre' => 'Mañan', 'sueldo' => 6000]);

// Re-ordenar después de agregar nuevos empleados
uasort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos ampliados
echo "Sueldos ampliados: <br>";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

	?>

</body>
</html>