<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="content-tabs">

            <!-- Nav pills -->

            <ul class="nav nav-pills" id="tabs">

                <li class="nav-item">

                    <a class="nav-link" id="tab1">Tab form 1</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="tab2">Tab Form 2</a>

                </li>

            </ul>



            <!-- Tab panes -->

            <div class="tab-content">

                <div class="container tab-pane active" id="tab1C">

                    <form>

                        <div class="form-inputs">

                            <label>Text</label>

                            <input class="width-100" type="text" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Email</label>

                            <input type="email" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Date</label>

                            <input class="width-100" type="date">

                        </div>

                        <div class="form-inputs">

                            <label>Password</label>

                            <input class="width-100" type="password" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Select</label>

                            <select name="select" id="select">

                                <option value="0">Select This Input</option>

                                <option value="1">Select 1</option>

                                <option value="2">Select 2</option>

                                <option value="3">Select 3</option>

                                <option value="4">Select 4</option>

                                <option value="5">Select 5</option>

                            </select>

                        </div>

                        <div class="form-inputs">

                            <label>File</label>

                            <input class="width-100" type="file">

                        </div>

                        <div class="form-inputs">

                            <label>Textarea</label>

                            <textarea name="textarea" id="textarea1" rows="5"></textarea>

                        </div>

                        <div class="d-flex flex-center py-1">

                            <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                            <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                        </div>

                    </form>

                </div>

                <div class="container tab-pane" id="tab2C">

                    <form>

                        <div class="form-inputs">

                            <label>Text</label>

                            <input class="width-100" type="text" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Email</label>

                            <input type="email" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Number</label>

                            <input class="width-100" type="number" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Date</label>

                            <input class="width-100" type="date">

                        </div>

                        <div class="form-inputs">

                            <label>Password</label>

                            <input class="width-100" type="password" placeholder="Text Here...">

                        </div>

                        <div class="form-inputs">

                            <label>Select Datalist</label>

                            <input class="width-100" type="text" list="cars" placeholder="Select or type for suggest" />

                            <datalist id="cars">

                                <option value="Select 1">

                                <option value="Select 2">

                                <option value="Select 3">

                                <option value="Select 4">

                                <option value="Select 5">

                            </datalist>

                        </div>

                        <div class="form-inputs">

                            <label>Textarea</label>

                            <textarea name="textarea" id="textarea2" rows="5"></textarea>

                        </div>

                        <div class="form-inputs">

                            <label>Radio Button</label>

                            <div class="form-group">

                                <input type="radio" value="radio 1"> Radio Button 1<br>

                                <input type="radio" value="radio 2" checked> Radio Button 2<br>

                                <input type="radio" value="radio 3" disabled> Radio Button 3<br>

                            </div>

                        </div>

                        <div class="d-flex flex-center py-1">

                            <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                            <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer.php') ?>