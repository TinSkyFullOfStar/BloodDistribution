<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="/BloodDistribution/public/check" method="post">
        发布人：<input type="text" name="username"><br><br>
        标题：<input type="text" name="title"><br><br>
        {{ csrf_field() }}
        <input type="submit">
    </form>

    <form action="/BloodDistribution/public/delete" method="post">
        您喜欢的水果？<br /><br />
        <label><input name="Fruit1" type="checkbox" value="10" />苹果 </label>
        <label><input name="Fruit2" type="checkbox" value="11" />桃子 </label>
        <label><input name="Fruit3" type="checkbox" value="12" />香蕉 </label>
        <label><input name="Fruit4" type="checkbox" value="13" />梨 </label>
        {{ csrf_field() }}
        <input type="submit">
    </form>

    <form action="/BloodDistribution/public/publish" method="post">
        Type：<input type="text" name="type_id"><br><br>
        标题：<input type="text" name="title"><br><br>
        发布内容：<input type="text" name="content"><br><br>
        备注：<input type="text" name="remarks"><br><br>
        {{ csrf_field() }}
        <input type="submit">
    </form>
</body>
</html>