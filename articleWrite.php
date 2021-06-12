<?php require_once "head.php";

loginCk();
?>
<div class="wrapper">
    <?php require_once "header.php"; ?>
    <div class="layout">
        <div class="article-form">
            <h1>글작성</h1>
            <div class="sub-area">
                <input type="text" name="subject" autocomplete="off">
                <select>
                    <option>자유 게시판</option>
                    <option>취미 게시판</option>
                </select>
            </div>
        <textarea name="content" id="editor">
            </textarea>
        </div>
    </div>    
    <?php require_once "footer.php"; ?>
</div>
</body>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error=> {
            console.error(error);
        })

</script>
</html>