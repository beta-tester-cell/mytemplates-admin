<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>List Tautan Menu</h6>
                </div>
                <div class="grid-2 grid-gap-2">
                    <div>
                        <form>
                            <div class="form-inputs">
                                <label>URL</label>
                                <input type="text" name="url" value="https://">
                            </div>
                            <div class="form-inputs">
                                <label>Link Text</label>
                                <input type="text" name="link_text" placeholder="Link Text">
                            </div>
                            <div class="d-flex flex-center">
                                <button class="btn btn-secondary btn-submit" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="nestable-wrapper">

                        <div class="d-flex flex-space-between mb-1 align-center">
                            <h6 style="margin: 0;">Menu Structure</h6>
                            <button type="submit" class="btn btn-primary btn-submit">Save</button>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi et exercitationem quidem, voluptas sequi dolorum voluptatibus adipisci qui natus aliquid illo eaque fuga eveniet architecto repellendus suscipit quas explicabo saepe!</p>

                        <div class="alert alert-primary d-flex flex-start my-1">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ex aut mollitia alias iste dolores, eveniet necessitatibus nam soluta ipsum facere odit accusantium quod at velit molestiae exercitationem hic! Enim!</p>

                        </div>
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <div class="d-flex flex-space-between">
                                            Menu 1
                                        </div>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">Menu 2</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">Menu 3</div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">Menu 4</div>
                                        </li>
                                        <li class="dd-item" data-id="5">
                                            <div class="dd-handle">Menu 5</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6">
                                                    <div class="dd-handle">Menu 6</div>
                                                </li>
                                                <li class="dd-item" data-id="7">
                                                    <div class="dd-handle">Menu 7</div>
                                                </li>
                                                <li class="dd-item" data-id="8">
                                                    <div class="dd-handle">Menu 8</div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9">
                                            <div class="dd-handle">Menu 9</div>
                                        </li>
                                        <li class="dd-item" data-id="10">
                                            <div class="dd-handle">Menu 10</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="11">
                                    <div class="dd-handle">Menu 11</div>
                                </li>
                                <li class="dd-item" data-id="12">
                                    <div class="dd-handle">Menu 12</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>