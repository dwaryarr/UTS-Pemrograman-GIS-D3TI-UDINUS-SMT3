<html>
    <head>
        <style>
            h1 {
text-align: center;
color:blue;
}
.search-layer {
  top: 100px;
  left: .5em;
}
.ol-touch .search-layer {
  top: 130px;
}
table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}
    table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 2px solid #416396;;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.btn-solid-reg {
	display: inline-block;
	padding: 0.8rem 0.5rem 0.8rem 0.5rem;
	border: 1px solid #7dc22b;
	border-radius: 4px;
	background-color: #7dc22b;
	color: #ffffff;
	font-weight: 600;
	font-size: 14;
	line-height: 0;
	text-decoration: none;
	transition: all 0.2s;
    }
        </style>
    </head>
<body>
<?php
    include "../koneksi.php";
    $sql="select * from jumlah_hotel";
    $hasil=mysqli_query($conn,$sql);
    echo "<table class='data-table'>
            <tr><th>Kecamatan</th><th>Remark</th><th>Kota</th><th>Provinsi</th><th>Jumlah Hotel</th><th>Edit</th></tr>";
    while ($row=mysqli_fetch_array($hasil)) {
        echo "<tr><td>".$row['kecamatan']."</td>
					<td>".$row['remark']."</td>
					<td>".$row['kota']."</td>
					<td>".$row['provinsi']."</td>
					<td>".$row['jumlah_hotel']." Hotel</td>
        <td><a class='btn-solid-reg' href='editjmlhotel.php?id=".$row["id"]."'>&#9998;Edit</a></td>
        </tr>";
        }
        echo "</table>";
        mysqli_close($conn);
?>
</body>
</html>