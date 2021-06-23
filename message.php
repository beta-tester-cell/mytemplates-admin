<?php include("header.php") ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="d-flex flex-start">
                <h6 class="message-page-tittle"><i class="fa fa-comments px-1"></i> Message Page</h6>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="d-flex grid-gap-1 flex-change">
                    <div class="message-left-side">
                        <button class="btn btn-secondary width-100" id="new-message">New Message <i class="fa fa-plus mx-1"></i></button>
                        <hr class="my-1">
                        <div class="message-list-panel">
                            <div class="width-100 btn-message-group" alt="chat001">
                                <div class="btn btn-message-dot" id="dotchat001" href="#dtchat001">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class="btn btn-message-list" id="ltchat001" href="#chat001">
                                    AP19X Aplikom 1
                                </div>
                            </div>
                            <div class="width-100 btn-message-group" alt="chat002">
                                <div class="btn btn-message-dot" id="dotchat002" href="#dtchat002">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class="btn btn-message-list" id="ltchat002" href="#chat002">
                                    AP19X Aplikom 2
                                </div>
                            </div>
                            <div class="width-100 btn-message-group" alt="chat003">
                                <div class="btn btn-message-dot" id="dotchat003" href="#dtchat003">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class="btn btn-message-list" id="ltchat003" href="#chat003">
                                    Mahasiswa 001
                                </div>
                            </div>
                            <div class="width-100 btn-message-group" alt="chat004">
                                <div class="btn btn-message-dot" id="dotchat004" href="#dtchat004">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class="btn btn-message-list" id="ltchat004" href="#chat004">
                                    Rakryan Narayana Prabhu Iswarakesawalingga Jagatnata Bhuwanatala
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message-right-side">
                        <!-- START OF MESSAGE FIRST PANEL -->
                        <div class="message-first-panel width-100">
                            <img src="theme/img/chat.png" class="chat-logo" alt="chat-panel">
                            <div class="info-panel-message">
                                Silakan pilih percakapan pada bagian kiri <b>atau</b> buat percakapan baru secara <b><i>direct</i></b> dengan klik <font color="red"><b>New message</b></font>
                            </div>
                        </div>
                        <!-- END OF MESSAGE FIRST PANEL -->

                        <!-- START OF FORM NEW MESSAGE -->
                        <div class="form form-new-message width-100 card" style="display: none;">
                            <div class="card-header">
                                <h6>Write New Message</h6>
                            </div>
                            <form action="">
                                <div class="my-1">
                                    <div class="message-label">
                                        <i class="label-float-icon fa fa-users-cog"></i>
                                        <label for="class">Class</label>
                                    </div>
                                    <input class="width-100" name="class" type="text" list="class" placeholder="Select or type class" />
                                    <datalist id="class">
                                        <option value="AP19X">
                                        <option value="AP19A">
                                        <option value="KA19D">
                                        <option value="MI20A">
                                        <option value="SK19G">
                                    </datalist>
                                </div>
                                <div class="my-1">
                                    <div class="message-label">
                                        <i class="label-float-icon fa fa-graduation-cap"></i>
                                        <label for="student">Student</label>
                                    </div>
                                    <input class="width-100" name="student" type="text" list="student" placeholder="Select or type student" />
                                    <datalist id="student">
                                        <option value="Mahasiswa 1">
                                        <option value="Mahasiswa 2">
                                        <option value="Mahasiswa 3">
                                        <option value="Mahasiswa 4">
                                        <option value="Mahasiswa 5">
                                    </datalist>
                                </div>
                                <div class="my-1">
                                    <textarea class="width-100" name="text-message" id="text-message" rows="6" placeholder="Type your message here..."></textarea>
                                </div>
                            </form>
                            <button id="send" name="send" class="btn btn-send mx-1">
                                Send
                                <i class="mx-1 fa fa-paper-plane"></i>
                            </button>
                        </div>
                        <!-- END OF FORM NEW MESSAGE -->

                        <!-- START OF MESSAGE DISPLAY -->
                        <!-- EXAMPLE 001 -->
                        <div id="chat001" class="message-display width-100 card" style="display: none;">
                            <div class="card-header message-subject">
                                <h6>AP19X Aplikom 1</h6>
                                <div class="message-session-cek">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="message-play">
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar01.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Mahasiswa 001</div>
                                        <hr>
                                        <p>
                                            Lorem
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar02.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Rakryan Narayana Prabhu Iswarakesawalingga Jagatnata Bhuwanatala</div>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eleifend dapibus nisl, sit amet molestie nulla ullamcorper in. Proin tortor magna, rhoncus at faucibus vitae, porta sed justo.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer message-send width-100">
                                <input class="input-text" type="text" placeholder="Type text here...">
                                <button id="send" name="send" class="btn btn-send-second">
                                    <span>Send</span> <i class="mx-1 fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- END OF EXAMPLE 001 -->
                        <!-- EXAMPLE 002 -->
                        <div id="chat002" class="message-display width-100 card" style="display: none;">
                            <div class="card-header message-subject">
                                <h6>AP19X Aplikom 2</h6>
                                <div class="message-session-cek">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="message-play">
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar01.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Mahasiswa 001</div>
                                        <hr>
                                        <p>
                                            Lorem
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar02.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Rakryan Narayana Prabhu Iswarakesawalingga Jagatnata Bhuwanatala</div>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eleifend dapibus nisl, sit amet molestie nulla ullamcorper in. Proin tortor magna, rhoncus at faucibus vitae, porta sed justo.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer message-send width-100">
                                <input class="input-text" type="text" placeholder="Type text here...">
                                <button id="send" name="send" class="btn btn-send-second">
                                    <span>Send</span> <i class="mx-1 fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- END OF EXAMPLE 002 -->
                        <!-- EXAMPLE 003 -->
                        <div id="chat003" class="message-display width-100 card" style="display: none;">
                            <div class="card-header message-subject">
                                <h6>Mahasiswa 001</h6>
                                <div class="message-session-cek">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="message-play">
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar01.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Mahasiswa 001</div>
                                        <hr>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel quae quod id adipisci optio cum fuga, dolorem fugiat nisi et sit possimus, voluptate voluptatibus. Perferendis enim optio qui exercitationem, ea!
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer message-send width-100">
                                <input class="input-text" type="text" placeholder="Type text here...">
                                <button id="send" name="send" class="btn btn-send-second">
                                    <span>Send</span> <i class="mx-1 fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- END OF EXAMPLE 003 -->
                        <!-- EXAMPLE 004 -->
                        <div id="chat004" class="message-display width-100 card" style="display: none;">
                            <div class="card-header message-subject">
                                <h6>Rakryan Narayana Prabhu Iswarakesawalingga Jagatnata Bhuwanatala</h6>
                                <div class="message-session-cek">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="message-play">
                                <div class="message-play-list width-100">
                                    <img src="theme/img/avatar02.png" alt="other-user">
                                    <div class="talkbubble-other">
                                        <div class="other-user">Rakryan Narayana Prabhu Iswarakesawalingga Jagatnata Bhuwanatala</div>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eleifend dapibus nisl, sit amet molestie nulla ullamcorper in. Proin tortor magna, rhoncus at faucibus vitae, porta sed justo.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                                <div class="message-play-list width-100">
                                    <div class="talkbubble-self">
                                        <p>
                                            Vivamus est massa, bibendum non massa vel, placerat aliquet mi. Praesent luctus accumsan massa vitae porttitor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer message-send width-100">
                                <input class="input-text" type="text" placeholder="Type text here...">
                                <button id="send" name="send" class="btn btn-send-second">
                                    <span>Send</span><i class="mx-1 fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- END OF EXAMPLE 004 -->
                        <!-- END OF MESSAGE DISPLAY -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="text-center py-1">
            <p>Copyright &copy; <?= date('Y'); ?> Anak Gajah. All Right Reserve</p>
        </div>
    </div>
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="theme/js/script.js" defer></script> 
<script>
    $(document).ready(function() {
        $("#new-message").click(function() {
            $(".form-new-message").show(300)
            $(".message-display").hide()
            $(".message-first-panel").hide()
            $(".btn-message-list-active").each(function(index){
	    		$(this).removeClass('btn-message-list-active').addClass('btn-message-list')
	    	})
	    	$(".btn-message-dot-active").each(function(index){
	    		$(this).removeClass('btn-message-dot-active').addClass('btn-message-dot')
	    	})
        })

        $(".btn-message-list").each(function(index) {
            $(this).on('click', function() {
                var tog = $(this).attr('href')
                var spt = tog.split('#').pop()
                $(this).removeClass('btn-message-list').addClass('btn-message-list-active')
                $("#dot" + spt).removeClass('btn-message-dot').addClass('btn-message-dot-active')
                $(".message-display").not($(tog)).hide()
                $(".btn-message-list-active").not($("#lt" + spt)).removeClass('btn-message-list-active').addClass('btn-message-list')
                $(".btn-message-dot-active").not($("#dot" + spt)).removeClass('btn-message-dot-active').addClass('btn-message-dot')
                $(tog).show()
                $(".form-new-message").hide()
                $(".message-first-panel").hide()
                // alert(spt)
            })
        })
    })
</script>




















</body>

</html>