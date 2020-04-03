    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <h1><a href="index.html" class="logo">e-fos</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{route('home')}}"><i class="fas fa-home"></i> Home </a>
                </li>
                <li>
                    <a href="#questionsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-question-circle"></i> Questions </a>
                    <ul class="collapse list-unstyled" id="questionsSubmenu">
                        <li>
                            <a href="{{route('questions.index')}}">Questions List</a>
                        </li>
                        <li>
                            <a href="{{route('questions.create')}}">Add a Question</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('answers.create')}}"><i class="fas fa-comment-dots"></i> Answers </a>
                </li>
            </ul>

            <div class="footer" style="margin-top: 250px;">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

        </div>
    </nav>


