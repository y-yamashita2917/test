<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>コース情報登録</title>
    <script type="text/javascript" language="javascript">
function check()
{
	txt = document.inputDate.titlename.value;
	if (txt == "") alert("講座名が入力されていません");
}
    </script>
</head>
<body>
	<h1>コース情報登録</h1>
    <form method="post" action="内容確認画面.php">
    <br>
    <label>コース名:<select name="course" size="1">
    <option value="就職ガイドコース">就職ガイドコース</option>
    <option value="まなクルプログラムコース">まなクルプログラムコース</option>
    <option value="まなクルExcelコース">まなクルExcelコース</option>
    <option value="まなクルWordコース">まなクルWordコース</option>
    <option value="まなクルキッズ英会話コース">まなクルキッズ英会話コース</option>
    <option value="まなクルキッズ音楽コース">まなクルキッズ音楽コース</option>
    <option value="まなクルEnglishコース">まなクルEnglishコース</option>
    <option value="まなクル特別コース">まなクル特別コース</option>
    </select>
    <form name="inputDate"><br>
    <br>
    <label>講座名/職種:<input type="text" name="titlename" size="50" maxlength="30">
    <br>
    <br>
    <label>時間:<input type="text" name="coursetime" maxlength="5"><br>
    <br>
    <label>コマ数:<input type="text" name="frequency" maxlength="15"></label><br>
    <br>
    <label>対象者:<input type="text" name="target" size="40" maxlength="20"><br>
    <br>
    <label>概要:<br>
    <textarea name="overview" rows="9" cols="100" maxlength="200"></textarea></label><br>
    <br>
    </form>
    <input type="submit" value="確認"><input type="button"action="href.コース情報一覧.php" value="コース情報一覧に戻る">
</body>
</html>
