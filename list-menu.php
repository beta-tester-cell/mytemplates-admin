<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="menu.php">Manajemen Menu</a>
        <a href="list-menu.php">List Tautan Menu</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>List Tautan Menu</h6>
                </div>
                <div class="d-flex flex-change grid-gap-2">
                    <div class="width-100">
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
                                    <span class="collaps-form" href="#formCollaps1"></span>
                                    <div class="dd-handle">Menu 1</div>
                                    <div class="collaps-form-content" id="formCollaps1">
                                        <form>
                                            <div class="form-inputs">
                                                <label for="menu-label">Menu Label</label>
                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" placeholder="Description">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="menu-url">URL</label>
                                                <input type="text" name="menu-url" placeholder="https://">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="icon-class">Icon Class</label>
                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="grup">Group</label>
                                                <div class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="user">User<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <span class="collaps-form" href="#formCollaps2"></span>
                                    <div class="dd-handle">Menu 2 </div>
                                    <div class="collaps-form-content" id="formCollaps2">
                                        <form>
                                            <div class="form-inputs">
                                                <label for="menu-label">Menu Label</label>
                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" placeholder="Description">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="menu-url">URL</label>
                                                <input type="text" name="menu-url" placeholder="https://">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="icon-class">Icon Class</label>
                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="grup">Group</label>
                                                <div class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="user">User<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <span class="collaps-form" href="#formCollaps3"></span>
                                            <div class="dd-handle">Menu 3</div>
                                            <div class="collaps-form-content" id="formCollaps3">
                                                <form>
                                                    <div class="form-inputs">
                                                        <label for="menu-label">Menu Label</label>
                                                        <input type="text" name="menu-label" placeholder="Menu Label">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" placeholder="Description">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="menu-url">URL</label>
                                                        <input type="text" name="menu-url" placeholder="https://">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="icon-class">Icon Class</label>
                                                        <input type="text" name="icon-class" placeholder="chevron-down">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="grup">Group</label>
                                                        <div class="form-group">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="administrator">Administrator<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="user">User<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <span class="collaps-form" href="#formCollaps4"></span>
                                            <div class="dd-handle">Menu 4</div>
                                            <div class="collaps-form-content" id="formCollaps4">
                                                <form>
                                                    <div class="form-inputs">
                                                        <label for="menu-label">Menu Label</label>
                                                        <input type="text" name="menu-label" placeholder="Menu Label">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" placeholder="Description">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="menu-url">URL</label>
                                                        <input type="text" name="menu-url" placeholder="https://">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="icon-class">Icon Class</label>
                                                        <input type="text" name="icon-class" placeholder="chevron-down">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="grup">Group</label>
                                                        <div class="form-group">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="administrator">Administrator<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="user">User<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="5">
                                            <span class="collaps-form" href="#formCollaps5"></span>
                                            <div class="dd-handle">Menu 5</div>
                                            <div class="collaps-form-content" id="formCollaps5">
                                                <form>
                                                    <div class="form-inputs">
                                                        <label for="menu-label">Menu Label</label>
                                                        <input type="text" name="menu-label" placeholder="Menu Label">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" placeholder="Description">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="menu-url">URL</label>
                                                        <input type="text" name="menu-url" placeholder="https://">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="icon-class">Icon Class</label>
                                                        <input type="text" name="icon-class" placeholder="chevron-down">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="grup">Group</label>
                                                        <div class="form-group">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="administrator">Administrator<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="user">User<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6">
                                                    <span class="collaps-form" href="#formCollaps6"></span>
                                                    <div class="dd-handle">Menu 6</div>
                                                    <div class="collaps-form-content" id="formCollaps6">
                                                        <form>
                                                            <div class="form-inputs">
                                                                <label for="menu-label">Menu Label</label>
                                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="description">Description</label>
                                                                <input type="text" name="description" placeholder="Description">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="menu-url">URL</label>
                                                                <input type="text" name="menu-url" placeholder="https://">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="icon-class">Icon Class</label>
                                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="grup">Group</label>
                                                                <div class="form-group">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="user">User<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="7">
                                                    <span class="collaps-form" href="#formCollaps7"></span>
                                                    <div class="dd-handle">Menu 7</div>
                                                    <div class="collaps-form-content" id="formCollaps7">
                                                        <form>
                                                            <div class="form-inputs">
                                                                <label for="menu-label">Menu Label</label>
                                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="description">Description</label>
                                                                <input type="text" name="description" placeholder="Description">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="menu-url">URL</label>
                                                                <input type="text" name="menu-url" placeholder="https://">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="icon-class">Icon Class</label>
                                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="grup">Group</label>
                                                                <div class="form-group">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="user">User<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="8">
                                                    <span class="collaps-form" href="#formCollaps8"></span>
                                                    <div class="dd-handle">Menu 8</div>
                                                    <div class="collaps-form-content" id="formCollaps8">
                                                        <form>
                                                            <div class="form-inputs">
                                                                <label for="menu-label">Menu Label</label>
                                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="description">Description</label>
                                                                <input type="text" name="description" placeholder="Description">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="menu-url">URL</label>
                                                                <input type="text" name="menu-url" placeholder="https://">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="icon-class">Icon Class</label>
                                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                                            </div>
                                                            <div class="form-inputs">
                                                                <label for="grup">Group</label>
                                                                <div class="form-group">
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="user">User<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9">
                                            <span class="collaps-form" href="#formCollaps9"></span>
                                            <div class="dd-handle">Menu 9</div>
                                            <div class="collaps-form-content" id="formCollaps9">
                                                <form>
                                                    <div class="form-inputs">
                                                        <label for="menu-label">Menu Label</label>
                                                        <input type="text" name="menu-label" placeholder="Menu Label">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" placeholder="Description">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="menu-url">URL</label>
                                                        <input type="text" name="menu-url" placeholder="https://">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="icon-class">Icon Class</label>
                                                        <input type="text" name="icon-class" placeholder="chevron-down">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="grup">Group</label>
                                                        <div class="form-group">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="administrator">Administrator<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="user">User<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="10">
                                            <span class="collaps-form" href="#formCollaps10"></span>
                                            <div class="dd-handle">Menu 10</div>
                                            <div class="collaps-form-content" id="formCollaps10">
                                                <form>
                                                    <div class="form-inputs">
                                                        <label for="menu-label">Menu Label</label>
                                                        <input type="text" name="menu-label" placeholder="Menu Label">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" placeholder="Description">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="menu-url">URL</label>
                                                        <input type="text" name="menu-url" placeholder="https://">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="icon-class">Icon Class</label>
                                                        <input type="text" name="icon-class" placeholder="chevron-down">
                                                    </div>
                                                    <div class="form-inputs">
                                                        <label for="grup">Group</label>
                                                        <div class="form-group">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="administrator">Administrator<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="user">User<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="11">
                                    <span class="collaps-form" href="#formCollaps11"></span>
                                    <div class="dd-handle">Menu 11</div>
                                    <div class="collaps-form-content" id="formCollaps11">
                                        <form>
                                            <div class="form-inputs">
                                                <label for="menu-label">Menu Label</label>
                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" placeholder="Description">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="menu-url">URL</label>
                                                <input type="text" name="menu-url" placeholder="https://">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="icon-class">Icon Class</label>
                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="grup">Group</label>
                                                <div class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="user">User<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="12">
                                    <span class="collaps-form" href="#formCollaps12"></span>
                                    <div class="dd-handle">Menu 12</div>
                                    <div class="collaps-form-content" id="formCollaps12">
                                        <form>
                                            <div class="form-inputs">
                                                <label for="menu-label">Menu Label</label>
                                                <input type="text" name="menu-label" placeholder="Menu Label">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" placeholder="Description">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="menu-url">URL</label>
                                                <input type="text" name="menu-url" placeholder="https://">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="icon-class">Icon Class</label>
                                                <input type="text" name="icon-class" placeholder="chevron-down">
                                            </div>
                                            <div class="form-inputs">
                                                <label for="grup">Group</label>
                                                <div class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="administrator">Administrator<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="user">User<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-direktorat">Admin Direktorat<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="admin-cabang">Admin Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-ho">Manajemen HQ<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-direktorat">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="manajemen-cabang">Manajemen Cabang<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="verifikator-cuti">Verifikator Cuti<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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