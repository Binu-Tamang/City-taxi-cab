<div class="page-header">
    <div class="container">
        <strong class="typing-text">
            <?php if (isset($page_name)): ?>
                <?php echo $page_name ?>
            <?php endif ?>
            <div class="cursor"></div>
        </strong>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item " aria-current="page"><a href="index.php">Home /</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><a href="contactus.php"
                        style="color: #ec1a23;">
                        <?php if (isset($page_name)): ?>
                            <?php echo $page_name ?>
                        <?php endif ?>
                    </a></li>
            </ol>
        </nav>
    </div>
</div>