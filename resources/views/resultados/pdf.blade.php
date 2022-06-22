@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Crear Paciente')])
@section('content')

    <img class="etiqueta" src="../public/img/ri_1.png" alt="etiqueta_izquierda" />
    <img class="agua" src="../public/img/ri_2.png" alt="marca_agua" />
    <img class="cabecera" src="../public/img/ri_3.png" alt="cabecera" />
    <img class="foot" src="../public/img/ri_4.png" alt="footerPdf">

    <div class="numOrden">
        <span class="numOrdLabel">Número Orden</span>
    </div>

    <div class="identificacion">
        <span class="idLabel">Identificación</span>
    </div>

    <div class="medico">
        <span class="medLabel">Médico</span>
        <span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div class="sexo">
        <span class="sexLabel">Sexo</span>
    </div>

    <div class="edad">
        <span class="edLabel">Edad</span>
    </div>

    <div class="numOrden2">
        <span class="numordField"># de Orden</span> 
    </div>

    <div class="identificacion2">
        <span class="idField"># de id</span>
    </div>

    <div class="medico2">
        <span class="medField">paciente_id</span>
    </div>

    <div class="sexo2">
        <span class="sexField">M</span>
    </div>

    <div class="edad2">
        <span class="edadField">82A</span>
    </div>

    <div class="paciente">
        <span class="pacLabel">Paciente</span> 
    </div>

    <div class="nomPaciente">
        <span class="pacNombres">MAURY RAMIREZ</span>
        <span class="pacApellidos">TINOCO</span>
    </div>

    <div class="tel">
        <span class="telLabel">Tel</span>
    </div>

    <div class="tel2">
        <span class="telField">resultado</span>
    </div>

    <div class="empresa">
        <span class="empresaLabel">Empresa</span>
    </div>

    <div class="empresa2">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">CENTRO HOSPITALARIO</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">REGIONAL SANTA</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">MONICA</span>
    </div>


    <div class="sucursal">
        <span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000">Sucursal</span>
        <span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div class="fecha">
        <span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000">Fecha</span>
        <span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div class="fecha2">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">14/06/2022 09:40:10 p.m.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div class="sucursal2">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">CEHOSAM</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div class="analisis">
        <span class="analisisTitle">Análisis</span>
    </div>

    <div class="resultados">
        <span class="resTitle">Resultado</span>
    </div>

    <div class="valorRef">
        <span class="valRef">Valor De Referencia</span>
    </div>

    <div class="resAnt">
        <span class="resAntLabel">Resultado Anterior</span>
    </div>

    <div class="fechVal">
        <span class="fechValLabel">Fecha Validación</span>font-style:normal;
    </div>

    <div style="position:absolute;top:2.83in;left:7.54in;width:0.76in;line-height:0.16in;">
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000">Responsable</span>
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:11.77in;left:5.17in;width:2.42in;line-height:0.12in;">
        <span style="font-style:normal;font-weight:normal;font-size:7pt;font-family:Helvetica;color:#000000">Página: 1</span>
        <span style="font-style:normal;font-weight:normal;font-size:7pt;font-family:Helvetica;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:3.54in;left:0.93in;width:4.92in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000">HEMOGRAMA IV [HEMOGLOBINA, HEMATOCRITO, RECUENTO DE</span>
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000">ERITROCITOS,INDICES ERITROCITARIOS,LEUCOGRAMA,RECUENTO DE</span>
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000">PLAQUETAS,</span>
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:3.54in;left:6.22in;width:1.17in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">2022/06/15 00:20:52</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <!-- Firma Medico  --> <img style="position:absolute;top:3.47in;left:7.79in;width:0.76in;height:0.76in" src="..public/img/ri_5.png" />
    <div style="position:absolute;top:4.30in;left:0.93in;width:0.84in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Globulos rojos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.30in;left:2.25in;width:0.65in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">2.480 10*6</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.30in;left:3.57in;width:1.23in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 11 años: 4.69 - 6.13</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">mill</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.63in;left:0.93in;width:0.78in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Hemoglobina</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.63in;left:2.25in;width:0.45in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">7.7 g/dl</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.63in;left:3.57in;width:1.23in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 11 años: 13.0 - 16.0</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.83in;left:0.93in;width:0.72in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Hematocrito</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.83in;left:2.25in;width:0.42in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">23.1 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:4.83in;left:3.57in;width:1.23in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 11 años: 39.0 - 48.0</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.03in;left:0.93in;width:0.98in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">RECUENTO DE</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">LEUCOCIT</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.03in;left:2.25in;width:0.70in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">20.000 mm³</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.03in;left:3.57in;width:1.19in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 4.5 - 10.2.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.36in;left:0.93in;width:0.66in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Neutròfilos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.36in;left:2.25in;width:0.42in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">91.2 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.36in;left:3.57in;width:1.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 42 -75.2 %.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.56in;left:0.93in;width:0.66in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Eosinòfilos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.56in;left:2.25in;width:0.35in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">0.0 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.56in;left:3.57in;width:1.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 0.0 - 3.0 %.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.76in;left:0.93in;width:0.55in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Basòfilos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.76in;left:2.25in;width:0.35in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">0.4 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.76in;left:3.57in;width:1.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 0.0 - 3.0 %.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.95in;left:0.93in;width:0.59in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Linfocitos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>
    <div style="position:absolute;top:5.95in;left:2.25in;width:0.35in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">4.7 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:5.95in;left:3.57in;width:1.13in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 10 - 51.1</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">%.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.29in;left:0.93in;width:0.62in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Monocitos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.29in;left:2.25in;width:0.35in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">3.8 %</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.29in;left:3.57in;width:1.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 19 años: 1.7 - 9.3 %.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.48in;left:0.93in;width:0.98in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">RECUENTO DE</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">PLAQUETA</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.48in;left:2.25in;width:0.48in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">166.000</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.48in;left:3.57in;width:1.00in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> 150.000-450.000</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.82in;left:0.93in;width:0.33in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">VPM</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:6.82in;left:2.25in;width:0.20in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">6.2</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.01in;left:0.93in;width:0.34in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">VCM</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.01in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">93.0</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.01in;left:3.57in;width:1.16in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 10 años: 80.0-97.0</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span>
    </div>

    <div style="position:absolute;top:7.21in;left:0.93in;width:0.34in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">MCH</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span>
    </div>

    <div style="position:absolute;top:7.21in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">30.9</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.21in;left:3.57in;width:1.23in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 10 años: 27.0 - 32.2</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.41in;left:0.93in;width:0.44in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">MCHC</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.41in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">33.3</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.41in;left:3.57in;width:1.26in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">&gt; 10 años: 31.8 - 36.4.</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"></span><br />
    </div>

    <div style="position:absolute;top:7.60in;left:0.93in;width:0.55in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Diàmetro</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br /></span>
    </div>

    <div style="position:absolute;top:7.60in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">14.9</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br /></span>
    </div>

    <div style="position:absolute;top:7.80in;left:0.93in;width:0.94in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">COMENTARIO</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br /></span>
    </div>

    <div style="position:absolute;top:7.80in;left:2.25in;width:1.29in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Eritrocitos ligeramente</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Disminuidos</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:8.38in;left:0.93in;width:4.59in;line-height:0.16in;">
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000">IONOGRAMA [CLORO, SODIO, POTASIO, BICARBONATO O CALCIO ]</span>
        <span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:8.38in;left:6.22in;width:1.17in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">2022/06/15 00:21:34</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <img style="position:absolute;top:8.30in;left:7.79in;width:0.76in;height:0.76in" src="ri_6.png" />
    <div style="position:absolute;top:9.13in;left:0.93in;width:0.35in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Sodio</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.13in;left:2.25in;width:0.34in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">133.0</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.13in;left:3.57in;width:0.89in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> 135-150 mEq/l</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.33in;left:0.93in;width:0.44in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Potasio</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.33in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">4.07</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.33in;left:3.57in;width:0.82in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> 3.5-5.5 mEq/l</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.53in;left:0.93in;width:0.34in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Cloro</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.53in;left:2.25in;width:0.27in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">95.5</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.53in;left:3.57in;width:0.92in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> 94.5-104 mEq/l</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.73in;left:0.93in;width:0.67in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Calcio total</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.73in;left:2.25in;width:0.20in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">7.5</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.73in;left:3.57in;width:0.90in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> 8.4-10.2 mgs%</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.92in;left:0.93in;width:0.68in;line-height:0.15in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Comentario</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <div style="position:absolute;top:9.92in;left:2.25in;width:1.09in;line-height:0.14in;">
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">Correlacionar con</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000">clinica del paciente</span>
        <span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:Times;color:#000000"> </span><br />
    </div>

    <style>
        html {
            margin: 0;
            padding: 0;
        }

        .cabecera {
            position: absolute;
            top: 0.02in;
            left: 0.00in;
            width: 100%;
            height: 8%;
        }

        .etiqueta {
            position: absolute;
            top: 2.91in;
            left: 0.15in;
            width: 0.45in;
            height: 4.55in
        }

        .agua {
            position: absolute;
            top: 4.42in;
            left: 1.70in;
            width: 6.06in;
            height: 6.06in
        }

        .foot {
            position: absolute;
            top: 10.48in;
            left: 0.00in;
            width: 100%;
            height: 1.21in
        }

        .numOrden {
            position: absolute;
            top: 1.15in;
            left: 0.48in;
            width: 1.23in;
            line-height: 0.21in;
        }

        .numOrdLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }
        
        .numOrden2 {
            position:absolute;
            top:1.38in;
            left:0.48in;
            width:0.51in;
            line-height:0.15in;
        }

        .numordField {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .identificacion {
            position:absolute;
            top:1.15in;
            left:2.25in;
            width:1.12in;
            line-height:0.21in;
        }

        .idLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }

        .identificacion2 {
            position:absolute;
            top:1.38in;
            left:2.25in;
            width:0.69in;
            line-height:0.15in;
        }

        .idField {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .medico {
            position:absolute;
            top:1.15in;
            left:4.01in;
            width:0.62in;
            line-height:0.21in;
        }

        .medLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }

        .medico2 {
            position:absolute;
            top:1.38in;
            left:4.01in;
            width:1.47in;
            line-height:0.15in;
        }

        .medField {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .sexo {
            position:absolute;
            top:1.15in;
            left:5.78in;
            width:0.41in;
            line-height:0.21in;
        }

        .sexLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }

        .sexo2 {
            position:absolute;
            top:1.38in;
            left:5.78in;
            width:0.16in;
            line-height:0.15in;
        }

        .sexField {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .edad {
            position:absolute;
            top:1.15in;
            left:7.54in;
            width:0.46in;
            line-height:0.21in;
        }

        .edLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }

        .edad2 {
            position:absolute;
            top:1.38in;
            left:7.54in;
            width:0.27in;
            line-height:0.15in;
        }

        .edadFielf {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .paciente {
            position:absolute;
            top:1.59in;
            left:0.48in;
            width:0.70in;
            line-height:0.21in;
        }

        .pacLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }

        .pacNombres {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .pacApellidos {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .tel {
            position:absolute;
            top:1.59in;
            left:2.25in;
            width:0.30in;
            line-height:0.21in;
        }

        .telLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000
        }
        
        .tel2 {
            position:absolute;
            top:1.82in;
            left:2.25in;
            width:0.72in;
            line-height:0.15in;
        }

        .telField {
            font-style:normal;
            font-weight:normal;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }
        
        .empresa {
            position:absolute;
            top:1.59in;
            left:4.01in;
            width:0.74in;
            line-height:0.21in;
        }

        .empresaLabel {
            font-style:normal;
            font-weight:bold;
            font-size:12pt;
            font-family:Times;
            color:#000000    
        }

        .empresa2 {
            position:absolute;
            top:1.82in;
            left:4.01in;
            width:1.61in;
            line-height:0.14in;
        }

        .sucursal {
            position:absolute;
            top:1.59in;
            left:5.78in;
            width:0.72in;
            line-height:0.21in;
        }

        .sucursal2 {
            position:absolute;
            top:1.82in;
            left:5.78in;
            width:0.70in;
            line-height:0.15in;
        }

        .fecha {
            position:absolute;
            top:1.59in;
            left:7.54in;
            width:0.51in;
            line-height:0.21in;
        }

        .fecha2 {
            position:absolute;
            top:1.82in;
            left:7.54in;
            width:1.45in;
            line-height:0.15in;
        }

        .nomPaciente{
            position:absolute;
            top:1.82in;
            left:0.48in;
            width:1.19in;
            line-height:0.14in;
        }  
        
        .analisis{
            position:absolute;
            top:2.83in;
            left:0.93in;
            width:0.50in;
            line-height:0.16in;
        }
        .analisisTitle{
            font-style:normal;
            font-weight:bold;
            font-size:9pt;
            font-family:Times;
            color:#000000;
        }
        .resultados{
            position:absolute;
            top:2.83in;
            left:2.25in;
            width:0.62in;
            line-height:0.16in;
        }

        .resTitle{
            font-style:normal;
            font-weight:bold;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }
        .valorRef{
            position:absolute;
            top:2.83in;
            left:3.57in;
            width:1.22in;
            line-height:0.16in;
        }

        .valRef{
            font-style:normal;
            font-weight:bold;
            font-size:9pt;
            font-family:Times;
            color:#000000;
        }

        .resAnt{
            position:absolute;
            top:2.83in;
            left:4.89in;
            width:1.16in;
            line-height:0.16in;
        }

        .resAntLabel{
            font-style:normal;
            font-weight:bold;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }

        .fechVal{
            position:absolute;
            top:2.83in;
            left:6.22in;
            width:1.05in;
            line-height:0.16in;
        }
        
        .fechVal{
            position:absolute;
            top:2.83in;
            left:6.22in;
            width:1.05in;
            line-height:0.16in;
        }

        .fechValLabel{
            font-weight:bold;
            font-size:9pt;
            font-family:Times;
            color:#000000
        }


    </style>
@endsection