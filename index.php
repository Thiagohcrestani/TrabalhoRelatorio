<?php
require_once __DIR__ . '/vendor/autoload.php';
ob_start();
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }               
    table tr:nth-child(odd) {
      background-color: #eee;
    }  
    table tr:nth-child(even) {
      background-color: #fff;
    }   
    table thead th {
      background-color: #ccc;
    } 
    table tfoot td {
      background-color: #ccc;
    } 
</style> 
<center><h1>RELATÓRIOS CONTAS ABERTAS AGOSTO 2019</h1></center>
<table align="center">
    <thead>
        <tr>
			<th>Nº DA CONTA</th>
            <th>ASSOCIADO</th>
            <th>IDADE</th>
			<th>GÊNERO</th>
			<th>ESTADO CIVIL</th>
            <th>AGENCIA</th>
			<th>CELULAR</th>
			
			
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="7" align="center">Sicredi Vale do Piquiri ® 2019 Todos os direitos Reservados</td>
        </tr>
    </tfoot>   
    <tbody>
        <tr>
			<td>00662-9</td>
            <td>Renato Figueira Francescatto</td>
            <td align="center">38</td>
			<td>M</td>
			<td>Solteiro</td>
            <td align="center">11</td>
			<td>(44)99947-3939</td>
        </tr>
        <tr>
			<td>55663-7</td>
            <td>João da silva</td>
            <td align="center">45</td>
			<td>M</td>
			<td>Casado</td>
            <td align="center">15</td>
			<td>(44)99947-336	8</td>
        </tr>
			<td>59652-8</td>
			<td>Rafaela dos santos</td>
            <td align="center">26</td>
			<td>F</td>
			<td>Casado</td>
            <td align="center">15</td>
			<td>(44)99947-3396</td>
        </tr>
        <tr>
			<td>24518-1	</td>
            <td>Nicolas Gabriel</td>
            <td align="center">24</td>
			<td>M</td>
			<td>Solteiro</td>
            <td align="center">05</td>
			<td>(44)99856-3355</td>
        </tr>        
    </tbody>
</table>
