<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <x-card class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Contact Us
            </h1>
        </header>

        {{-- <div class="row">
            <div class="text-lg">
                <div class="form-group">
                    <label for="eamil">Email address</label>
                    <input type="email" class="form-control" id="eamail" placeholder="enter your email">
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:40px;">
            <div class="text-lg">
                <div class="form-group">
                    <label for="eamil">Email address</label>
                    <input type="email" class="form-control" id="eamail" placeholder="enter your email">
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:40px;">
            <div class="text-lg">
                <div class="form-group">
                    <label for="eamil">Email address</label>
                    <input type="email" class="form-control" id="eamail" placeholder="enter your email">
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:40px;">
            <div class="text-lg">
                <div class="form-group">
                    <label for="eamil">Email address</label>
                    <input type="email" class="form-control" id="eamail" placeholder="enter your email">
                </div>
            </div>
        </div> --}}


        <div class="col-md-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="">Send message</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>





    </x-card>

</x-layout>