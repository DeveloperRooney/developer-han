<?php

require_once "header.html";

?>

    <title>Document</title>
</head>
<body>

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
</body>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error=> {
            console.error(error);
        })

</script>
</html>