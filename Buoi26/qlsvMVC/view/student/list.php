<?php 
require ("layout/header.php");

 ?>

<h1>Danh sách sinh viên</h1>
<a href="/?c=add" class="btn btn-info">Add</a>
<form action="/?c=list" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control"
            value="">
        <button class="btn btn-danger">Tìm</button>
    </label>
</form>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$stt = 0;			
		foreach ($students as $student) {
			$stt++;
		?>
        <tr>
            <td> <?php echo $stt ?> </td>
            <td> <?php echo $student-> id ?> </td>
            <td> <?php echo $student-> name ?> </td>
            <td> <?php echo convertDatetoVNFormat($student -> birthday) ?> </td>
            <td> <?php echo getGender($student -> gender) ?> </td>
            <td><a href="/?c=edit&id=<?php echo $student-> id ?>">Sửa</a></td>
            <td><a href="/?c=delete&id=<?php echo $student-> id ?>">Xóa</a></td>
           
        </tr>

        <?php			
		} 
		?>

    </tbody>
</table>
<div>
    <span>Số lượng: <?php echo $stt ?> </span>
</div>

<?php 
require ("layout/footer.php");
 ?>