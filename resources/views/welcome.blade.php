<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('fonts/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" id="leven-google-fonts-css"
          href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
          type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" id="myour-fonts-css"
          href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMr+Dafoe&amp;subset=latin%2Clatin-ext"
          type="text/css" media="all">
</head>
<body>


<div class="container" id="app">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.svg') }}" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#app">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#front-skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#papers">Papers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#connect">Connect</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row header">
        <div class="col-md-12 col-lg-6 mt-5">
            <div class="profile">
                <img src="{{ asset('images/profile.jpeg') }}" alt="saman rafiee">
            </div>
        </div>
        <div class="col-md-12 col-lg-6 mt-5">
            <div class="about col-sm-12 col-lg-8">
                <h3>Web Developer and AI</h3>
                <h1>Saman Rafiee Sardo</h1>
                <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum
                    gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna,
                    a placerat sapien pretium eu.</p>
                <a href="/" class="btn btn-link">Download CV</a>
            </div>
        </div>
    </div>
    <div class="card" id="front-skills">
        <div class="card-header">
            <h2>Front Skills</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/html.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">HTML</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/css.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">CSS</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/javascript.svg') }}" alt="javascript">
                    </div>
                    <h2 class="skill-title">Javascript</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/jquery.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">JQuery</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/bootstrap.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">Bootstrap</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/tailwind.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">Tailwind</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Backend Skills</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/php.svg') }}" alt="">
                    </div>
                    <h2 class="skill-title">PHP</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/laravel.svg') }}" alt="laravel">
                    </div>
                    <h2 class="skill-title">Laravel</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/Python.svg') }}" alt="Python">
                    </div>
                    <h2 class="skill-title">Python</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/django.svg') }}" alt="django">
                    </div>
                    <h2 class="skill-title">django</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Database Skills</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/mysql.svg') }}" alt="mysql">
                    </div>
                    <h2 class="skill-title">Mysql</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/mongodb.svg') }}" alt="mongodb">
                    </div>
                    <h2 class="skill-title">MongoDB</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/postgresql.svg') }}" alt="postgresql">
                    </div>
                    <h2 class="skill-title">PostgreSQL</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Artificial Intelligence Skills</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/sklearn.svg') }}" alt="Scikit Learn">
                    </div>
                    <h2 class="skill-title">Scikit Learn</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/Numpy.svg') }}" alt="Numpy">
                    </div>
                    <h2 class="skill-title">Numpy</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/Pandas.svg') }}" alt="Pandas">
                    </div>
                    <h2 class="skill-title">Pandas</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/tensorflow.svg') }}" alt="tensorflow">
                    </div>
                    <h2 class="skill-title">Tensorflow</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/keras.svg') }}" alt="keras">
                    </div>
                    <h2 class="skill-title">Keras</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/pytorch.svg') }}" alt="pytorch">
                    </div>
                    <h2 class="skill-title">Pytorch</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/machine-learning.svg') }}" alt="machine-learning-Algorithmes">
                    </div>
                    <h2 class="skill-title">Machine Learning Algorithmes</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/deep-learning.svg') }}" alt="Deep-learning-Algorithmes">
                    </div>
                    <h2 class="skill-title">Deep Learning Algorithmes</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Other Skills</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/git.svg') }}" alt="Git">
                    </div>
                    <h2 class="skill-title">Git</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/github.svg') }}" alt="github">
                    </div>
                    <h2 class="skill-title">GitHub</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/gitlab.svg') }}" alt="GitLab">
                    </div>
                    <h2 class="skill-title">GitLab</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="skill-progress">
                    <div class="skill-logo">
                        <img src="{{ asset('images/jupyter.svg') }}" alt="Jupyter Notebook">
                    </div>
                    <h2 class="skill-title">Jupyter Notebook</h2>
                    <div class="skill-about"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" id="papers">
        <div class="card-header">
            <h2>Papers</h2>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Publisher</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>#3</td>
                    <td>Network intrusion detection based on deep learning method in internet of thing.</td>
                    <td>2022</td>
                    <td><a href="https://link.springer.com/">Journal of Reliable Intelligent Environments (Springer)</a>
                    </td>
                    <td><a href="https://link.springer.com/article/10.1007/s40860-021-00169-8">Download</a></td>
                </tr>
                <tr>
                    <td>#2</td>
                    <td>Data mining tools-a case study for network intrusion detection.</td>
                    <td>2021</td>
                    <td><a href="https://link.springer.com/">Multimedia Tools and Applications volume (Springer)</a>
                    </td>
                    <td><a href="https://link.springer.com/article/10.1007/s11042-020-09916-0">Download</a></td>
                </tr>
                <tr>
                    <td>#1</td>
                    <td>Detect phishing websites with a text-based approach.</td>
                    <td>2020</td>
                    <td><a href="https://slaa10.uk.ac.ir/">10th Seminar on Linear Algebra</a></td>
                    <td><a href="https://slaa10.uk.ac.ir/paper?manu=1069">Download</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card" id="education" id="education">
        <div class="card-header">
            <h2>Education</h2>
        </div>
        <div class="card-body">
            <div class="liner-box">
                <div class="icon las la-graduation-cap"></div>
                <h2>Master's Degree, Computer Science: Artificial Intelligence</h2>
                <span>Shahid Bahonar University of Kerman (2018-2020)</span>
                <p>-Project Title:<br></p>
            </div>
            <div class="liner-box">
                <div class="icon las la-graduation-cap"></div>
                <h2>Master's Degree, Computer Science: Artificial Intelligence</h2>
                <span>Shahid Bahonar University of Kerman (2018-2020)</span>
                <p>-Project Title:<br></p>
            </div>
        </div>
    </div>
    <div class="card" id="connect">
        <div class="card-header">
            <h2>Connect with Me</h2>
        </div>
        <div class="card-body row">
            <div class="col-md-3 connect-box"><img src="{{ asset('images/address.svg') }}" alt="address"> Iran</div>
            <div class="col-md-3 connect-box"><img src="{{ asset('images/phone.svg') }}" alt="phone"> +989217808178
            </div>
            <div class="col-md-3 connect-box"><img src="{{ asset('images/mail.svg') }}" alt="mail">
                saman.rafiee.rs[at]gmail.com
            </div>
            <div class="col-md-3 connect-box"><img src="{{ asset('images/linkedin.svg') }}" alt="Linkedin"> <a
                    href="https://linkedin.com/in/saman-rafiee">@saman-rafiee</a></div>
            <div class="col-md-3 connect-box"><img src="{{ asset('images/github.svg') }}" alt="github"> <a
                    href="https://github.com/s-rafiee">@s-rafiee</a></div>
        </div>
    </div>
    <footer style="font-family: 'Mr Dafoe'">
        © 2021, Developed with heart by Saman Rafiee Sardo.
    </footer>
</div>
</div>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</body>
</html>
