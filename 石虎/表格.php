<?php include('conn.php');

$sql = "select * from `index` ";
	   $query=mysqli_query($conn,$sql);



?>
<style type="text/css">
	@import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap");
*{
	margin: 0;
	padding: 0;
	list-style: none;
}

html, body{
	height: 100%;
}

body{
  display:flex;
  align-items:center;
  background-image: linear-gradient(90deg,#3d5894,#08c7a5);
}

.table{
  width: 800px;
  margin:auto;
  
}

.table table{
  width: 100%;
  border:3px double #666;
  background:#fff;
  border-radius:10px;
}

.table thead{
  background:#333;
  color:#fff;
}

.table thead th:first-child{
  border-radius:7px 0 0 0;
}
.table thead th:last-child{
  border-radius: 0 7px 0 0;
}

.table tbody tr:nth-child(even){
  background-color:#ffa;
}

.table tbody a{
  color:#777;
}

.table tbody tr:hover{
  background-color:#fee;
}

.table tfoot td:first-child{
  border-radius:0 0 0 7px;
}
.table tfoot td:last-child{
  border-radius: 0 0 7px 0;
}

.table th{
  border:1px solid #666;
  padding: 6px 10px;
  font-family: 'Noto Sans TC', sans-serif;
}
.table td{
  border:1px solid #666;
  padding: 6px 10px;
  font-family: 'Noto Sans TC', sans-serif;
  
}

.table caption{
  caption-side:bottom;
  text-align:right;
  padding: 10px 0;
  color:#ccc;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="table">
	<table>
		
		<thead>
			<tr>
				<th scope="col">國家名稱</th>
				<th scope="col">國家發展指數</th>
				<th scope="col">國家保育指數</th>
				<th scope="col">植被比例</th>
				<th scope="col">野生動物比例</th>
			
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a target="_blank">圖文滿版</a>
				</td>
				<td>
					<a target="_blank">交錯漂浮版</a>
				</td>
				<td>
					<a target="_blank">圖文滿版</a>
				</td>
				<td>
					<a target="_blank">導覽列</a>
				</td>
				<td>敬請期待</td>
				
			</tr>
			<tr>
				<td>
					<a target="_blank">互動圖文卡片</a>
				</td>
				<td>
					<a target="_blank">破格式設計</a>
				</td>
				<td>
					<a target="_blank">超通用橫式版面</a>
				</td>
				<td>
					<a target="_blank">變化你的導覽列</a>
				</td>
				<td>敬請期待</td>
				
			</tr>
			<tr>
				<td>
					<a target="_blank">人員介紹卡片</a>
				</td>
				<td>敬請期待</td>
				<td>敬請期待</td>
				<td>
					<a target="_blank">網站麵包屑</a>
				</td>
				<td></td>
				
			</tr>
			<tr>
				<td>
					<a target="_blank">超通用橫式版面</a>
				</td>
				<td></td>
				<td></td>
				<td>敬請期待</td>
				<td></td>
				
			</tr>
			<tr>
				<td>
					<a target="_blank">網頁頁尾</a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr>
				<td>
					<a target="_blank">方塊酥版面</a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
		</tbody>
		
	</table>
</div>
</body>
</html>
