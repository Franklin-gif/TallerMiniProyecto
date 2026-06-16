<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTP - Mini Proyecto #2</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Estilos Generales y Contenedor */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f0f2f5; 
            margin: 0; 
            padding: 20px; 
            color: #333; 
        }
        
        .wrapper { 
            max-width: 750px; 
            margin: 30px auto; 
            background: #ffffff; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.08); 
        }
        
        h1, h2, h3 { 
            color: #004b87; 
            text-align: center; 
        }

        /* ======================================================= */
        /* NUEVA REJILLA DE DOS COLUMNAS PARA BOTONES MÁS PEQUEÑOS  */
        /* ======================================================= */
        .menu-list { 
            list-style: none; 
            padding: 0; 
            margin: 25px 0 0 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Crea exactamente 2 columnas iguales */
            gap: 12px; /* Espaciado entre las filas y columnas */
        }
        
        /* En caso de que haya un número impar de botones (como el 9), 
           este código hace que el último botón ocupe todo el ancho inferior */
        .menu-list li:last-child {
            grid-column: span 2;
        }
        
        .menu-list li { 
            margin: 0;
            padding: 0;
        }
        
        /* Botones redimensionados y más compactos */
        .menu-list a { 
            display: block; 
            padding: 10px 15px; /* Menor padding para hacerlos más pequeños */
            background: linear-gradient(135deg, #005da4 0%, #004b87 100%); 
            color: #ffffff; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: 600; 
            font-size: 14px; /* Texto un poco más pequeño para que quepa bien en las columnas */
            text-align: center; /* Centra el texto dentro del botón */
            box-shadow: 0 2px 5px rgba(0, 93, 164, 0.15);
            transition: all 0.2s ease;
            white-space: nowrap; /* Evita que el texto se rompa en dos líneas si es largo */
            overflow: hidden;
            text-overflow: ellipsis; /* Añade puntos suspensivos si el texto es demasiado largo para el espacio */
        }
        
        /* Efecto Hover */
        .menu-list a:hover { 
            background: linear-gradient(135deg, #0076cf 0%, #005da4 100%);
            transform: translateY(-1px); /* Elevación sutil */
            box-shadow: 0 4px 8px rgba(0, 93, 164, 0.25);
        }

        .menu-list a:active {
            transform: translateY(1px);
        }
        /* ======================================================= */

        /* Formularios y Componentes de los Problemas */
        .form-group { 
            margin-bottom: 15px; 
        }
        
        label { 
            display: block; 
            margin-bottom: 6px; 
            font-weight: 600; 
        }
        
        input[type="number"], input[type="date"], select { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 6px; 
            box-sizing: border-box; 
        }
        
        .btn-enviar { 
            background: #28a745; 
            color: #fff; 
            padding: 12px 20px; 
            border: none; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 16px; 
            font-weight: bold; 
            width: 100%; 
        }
        
        .btn-enviar:hover { 
            background: #218838; 
        }
        
        .btn-regresar { 
            display: inline-block; 
            background: #6c757d; 
            color: #fff; 
            padding: 10px 15px; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: 500; 
        }
        
        .btn-regresar:hover { 
            background: #5a6268; 
        }
        
        .error { 
            color: #dc3545; 
            background: #f8d7da; 
            padding: 12px; 
            border-radius: 6px; 
            border: 1px solid #f5c6cb; 
            font-weight: bold; 
        }
        
        /* Tablas de Resultados */
        .tabla-resultados { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 15px; 
        }
        
        .tabla-resultados th, .tabla-resultados td { 
            border: 1px solid #ddd; 
            padding: 12px; 
            text-align: left; 
        }
        
        .tabla-resultados th { 
            background-color: #005da4; 
            color: white; 
        }
        
        .chart-box { 
            max-width: 450px; 
            margin: 20px auto; 
        }
    </style>
</head>
<body>
<div class="wrapper">
    <h1>Mini Proyecto #2</h1>
    <p style="text-align: center; color: #666; font-size: 14px;">Estructuras de Control Condicionales y Repetitivas</p>
    <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 25px;">