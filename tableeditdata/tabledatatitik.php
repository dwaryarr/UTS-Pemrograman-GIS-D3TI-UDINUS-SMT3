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
	font-weight: 500;
	font-size: 14;
	line-height: 0;
	text-decoration: none;
	transition: all 0.2s;
    }
    .btn-solid-del {
	display: inline-block;
	padding: 0.8rem 0.5rem 0.8rem 0.5rem;
	border: 1px solid Tomato;
	border-radius: 4px;
	background-color: Tomato;
	color: #ffffff;
	font-weight: 500;
	font-size: 14;
	line-height: 0;
	text-decoration: none;
	transition: all 0.2s;
    }
        </style>
    </head>
<body>
<center><a class="btn-solid-reg" href="tambahtitikhotel.php"> &#10133; Tambah Data</a></center><br>
<?php
    include "../koneksi.php";
    $sql="select * from hotel";
    $hasil=mysqli_query($conn,$sql);

    echo "<table class='data-table'>
            <tr><th>Nama Hotel</th><th>Jenis</th><th>Alamat</th><th>Latitude</th><th>Longitude</th><th>Edit</th><th>Delete</th></tr>";
    while ($row=mysqli_fetch_array($hasil)) {
        echo "<tr>
                    <td>".$row['nama_hotel']."</td>
					<td>".$row['jenis']."</td>
					<td>".$row['alamat']."</td>
					<td>".$row['lat']."</td>
					<td>".$row['lng']."</td>
        <td><a class='btn-solid-reg' href='edittitikhotel.php?id=".$row["id"]."'>&#9998; Edit</a></td>
        <td><a class='btn-solid-del' href='deletetitikhotel.php?id=".$row["id"]."' onclick='deleteData();'>&#128465; Delete</a></td>
        </tr>";
        }
        echo "</table>";
        mysqli_close($conn);
?>
<script>
  function deleteData() {
    if (alert("Data Terhapus!")) {
        
    }
}
</script>
</body>
</html>