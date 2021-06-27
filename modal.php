<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="modal.php">Modal</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="grid-2 grid-gap-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Basic Modal</h6>
                    </div>

                    <p>
                        Below is a Basic modal example.
                        clicking the button below. It will slide down and fade in from the top of the page.
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Click Me! to demo Modal
                    </button>

                    <!-- Modal -->
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis provident laudantium autem, sed quaerat laboriosam nam nulla, ex sunt hic similique officiis minus dolor aliquid! Eaque tenetur explicabo similique exercitationem!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>Static Modal</h6>
                    </div>
                    <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Click Me! to demo static Modal
                    </button>

                    <!-- Modal -->
                    <div class="modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis provident laudantium autem, sed quaerat laboriosam nam nulla, ex sunt hic similique officiis minus dolor aliquid! Eaque tenetur explicabo similique exercitationem!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6> Scrolling Long Content</h6>
                    </div>
                    <p>
                        When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.

                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LongModal">
                        Click Me! to demo Long Content
                    </button>

                    <!-- Modal -->
                    <div class="modal" id="LongModal" tabindex="-1" aria-labelledby="LongModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="LongModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6> Scrolling Long Content</h6>
                    </div>
                    <p>
                        Create a scrollable modal body by adding <span class="text-danger">.modal-dialog-scrollable</span> to <span class="text-danger">modal-dialog</span>.
                        and add <span class="text-danger">styling height</span> to <span class="text-danger">.modal-body</span>

                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ScroollModal">
                        Click Me! to demo scrolling Modal
                    </button>

                    <!-- Modal -->
                    <div class="modal" id="ScroollModal" tabindex="-1" aria-labelledby="ScroollModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ScroollModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height: 300px;">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>Vertically Centered</h6>
                    </div>
                    <p>
                        Modal will slide down and fade in from the top to Center of the page.
                        Add <span class="text-danger">.modal-dialog-centered</span> to <span class="text-danger">.modal-dialog</span> to vertically center the modal.
                    </p>
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Click Me! to demo Modal
                    </button>

                    <!-- Modal-->
                    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="LongModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sed ullam ut est itaque distinctio laudantium adipisci id, quae veritatis a rerum, neque soluta minima atque quaerat inventore repellat aut!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>