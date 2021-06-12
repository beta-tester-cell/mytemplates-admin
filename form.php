<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="form grid-2 grid-gap-1 py-1">

            <div class="card">

                <div class="card-header">

                    <h6>Form input side by side</h6>

                </div>

                <form>

                    <div class="form-inputs">

                        <label>Text</label>

                        <input class="width-100" type="text" placeholder="Text Here...">

                    </div>

                    <div class="form-inputs">

                        <label>Text with info</label>

                        <div class="form-info">

                            <input class="width-100" type="text" placeholder="Text Here...">

                            <span class="form-text">This Form input with info bellow text input</span>

                        </div>

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

                        <label>Date & Time</label>

                        <input class="width-100" type="datetime-local">

                    </div>

                    <div class="form-inputs">

                        <label>Time</label>

                        <input type="time">

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

                        <label>File</label>

                        <input type="file">

                    </div>

                    <div class="form-inputs">

                        <label>Textarea</label>

                        <textarea name="textarea" id="textarea" rows="5"></textarea>

                    </div>

                    <div class="form-inputs">

                        <label>Check Box</label>

                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" value="checkbox 1"> checkbox 1<br>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" value="checkbox 2" checked> checkbox 2<br>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" value="checkbox 3" checked disabled> checkbox 3<br>
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>

                    <div class="form-inputs">

                        <label>Radio Button</label>

                        <div class="form-group">
                            <label class="radio-button"> Radio Button 1
                                <input type="radio" value="">
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio-button"> Radio Button 2
                                <input type="radio" value="" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio-button"> Radio Button 3
                                <input type="radio" value="" disabled>
                                <span class="checkmark"></span>
                            </label>

                        </div>

                    </div>

                    <div class="form-inputs">

                        <label>Switch</label>

                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>

                    </div>

                    <div class="d-flex flex-center py-1">

                        <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                        <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                    </div>

                </form>

            </div>

            <div class="card">

                <div class="card-header">

                    <h6>Form input top bottom</h6>

                </div>

                <form>

                    <div class="my-1">

                        <label>Text</label>

                        <input class="width-100" type="text" placeholder="Text Here...">

                    </div>

                    <div class="my-1">

                        <label>Text with info</label>

                        <div class="form-info">

                            <input class="width-100" type="text" placeholder="Text Here...">

                            <span class="form-text">This Form input with info bellow text input</span>

                        </div>

                    </div>

                    <div class="my-1">

                        <label>Email</label>

                        <input class="width-100" type="email" placeholder="Text Here...">

                    </div>

                    <div class="my-1">

                        <label>Number</label>

                        <input class="width-100" type="number" placeholder="Text Here...">

                    </div>

                    <div class="my-1">

                        <label>Date</label>

                        <input class="width-100" type="date">

                    </div>

                    <div class="my-1">

                        <label>Date & Time</label>

                        <input class="width-100" type="datetime-local">

                    </div>

                    <div class="my-1">

                        <label>Password</label>

                        <input class="width-100" type="password" placeholder="Text Here...">

                    </div>

                    <div class="my-1">

                        <label>Select</label>

                        <select class="width-100" name="select" id="select">

                            <option value="0">Select This Input</option>

                            <option value="1">Select 1</option>

                            <option value="2">Select 2</option>

                            <option value="3">Select 3</option>

                            <option value="4">Select 4</option>

                            <option value="5">Select 5</option>

                        </select>

                    </div>

                    <div class="my-1">

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

                    <div class="my-1">

                        <label>File</label>

                        <input class="width-100" type="file">

                    </div>

                    <div class="my-1">

                        <label>Textarea</label>

                        <textarea class="width-100" name="textarea" id="" rows="5"></textarea>

                    </div>

                    <div class="d-flex flex-center py-1">

                        <button type="submit" class="btn btn-secondary btn-submit mx-1">Submit</button>

                        <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                    </div>

                </form>

            </div>

            <div class="card">

                <div class="card-header">

                    <h6>Form</h6>

                </div>

                <form>

                    <div class="form-inputs">

                        <label> Text Required</label>

                        <input class="width-100" type="text" placeholder="This input must be field some text" required>

                    </div>

                    <div class="form-inputs">

                        <label> Text Disabled</label>

                        <input class="width-100" type="text" placeholder="This input disabled" disabled>

                    </div>

                    <div class="form-inputs">

                        <label> Text Readonly</label>

                        <input class="width-100" type="text" placeholder="This input readonly" readonly>

                    </div>

                    <div class="d-flex flex-center py-1">

                        <button type="submit" class="btn btn-danger btn-submit mx-1">Submit</button>

                        <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                    </div>

                </form>

            </div>

            <div class="card">

                <div class="card-header">

                    <h6>Alert</h6>

                </div>



                <div class="alert alert-red d-flex flex-start my-1">

                    <h6>This is alert for warning</h6>

                </div>

                <div class="alert alert-green d-flex flex-start my-1">

                    <h6>This is alert for warning</h6>

                </div>

                <div class="alert alert-primary d-flex flex-start my-1">

                    <h6>This is alert for warning</h6>

                </div>

                <div class="alert alert-secondary d-flex flex-start my-1">

                    <h6>This is alert for warning</h6>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer.php') ?>