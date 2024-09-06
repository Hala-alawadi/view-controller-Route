<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="box-shadow-full">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="assets/img/aftar.jpg" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">Name: </span> <span>{{ $name }} </span></p>
                    <p><span class="title-s">Date Of Birth: </span> <span>{{ $birth }}</span></p>
                    <p><span class="title-s">Email: </span> <span>{{ $email }}</span></p>
                    <p><span class="title-s">Phone: </span> <span>{{ $phonenumber }}</span></p>
                  </div>
                </div>
              </div>
              <div class="skill-mf">
                <p class="title-s">Skill</p>
                @foreach ($skills as $skill => $percentage)
                  <span>{{ $skill }}</span> <span class="pull-right">{{ $percentage }}</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $percentage }};" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <div class="title-box-2">
                  <h5 class="title-left">About me</h5>
                </div>
                <p class="lead">
                  A student majoring in Information Technology, holding a Bachelor's degree in Business Administration.
                  She has some experience in creating HTML pages and is eager to enhance her skills in this area.
                </p>
                <p class="lead">
                  Passionate about photography and capturing beautiful moments, she seeks to gain expertise in other fields as well.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>