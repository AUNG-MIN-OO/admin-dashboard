<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "navbar.php" ?>

    <div class="vh-100 bg-background p-3">
                <div class="heading d-flex justify-content-between align-content-center">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="">
                            <h3>Create New Post</h3>
                        </div>
                        <div class="mb-2">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a href="post_list.php" class="text-white text-decoration-none">Posts List</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body bg-blue">
                                <form action="#">
                                    <div class="mb-4">
                                        <label for="title" class="mb-2">Post Title</label>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                    <div class="mb-4">
                                        <label for="desc" class="mb-2">Description</label>
                                        <textarea id="description" class="textarea w-100 p-2" name="description" rows="20" placeholder="Something else here"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="img" class="mb-2">Choose Image</label>
                                        <input type="file" id="img" name="img" class="form-control">
                                    </div>
                                    <button class="btn bg-button float-end">Create Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>