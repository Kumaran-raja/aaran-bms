
<div>
    <div class="relative ">
        <img src="{{ asset('images/contact/contact header.jpg') }}" class="w-full" alt="">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/50">
            <h1 class="text-6xl font-bold">Contact us</h1>
            <p class="text-lg">Get In Touch</p>
        </div>
    </div>
    <div class="flex justify-around -mt-8 z-0 relative">
        <div class="flex flex-col gap-y-2 text-center w-2/5 l bg-gray-700 p-4 rounded-lg text-white">
            <img src="{{asset('images/contact/call.png')}}" class="mx-auto" width="50px" height="50px" alt="">
            <p class="text-3xl bold">Contact </p>
            <p class="text-xl">Reach out to us anytime – we're here to help!</p>
            <p>+91 0000000000</p>
            <p>+91 0000000000</p>
            <p class="mb-2">aaran@gmail.com</p>
            <a href="tel:0000000000" class="mt-auto bg-orange-500 text-white p-2 rounded-md">Call Now</a>
        </div>
        <div class="flex flex-col gap-y-2 text-center w-2/5  bg-gray-700 p-4 rounded-lg text-white">
            <img src="{{asset('images/contact/office-address.png')}}" class="mx-auto" width="50px" height="50px" alt="">
            <h1 class="text-3xl bold">Address </h1>
            <p class="text-xl">Visit us at our office – let's connect in person!</p>
            <p>Aaran Software</p>
            <p class="mb-2">456, Tech Park Avenue, Tirunelveli, Tamil Nadu, India - 627001</p>
            <a href="https://maps.app.goo.gl/nbmfWAJmaDZhcbBn9" target="_blank" class="mt-auto bg-orange-500 text-white p-2 rounded-md">Location</a>
        </div>
    </div>
    <h1 class="text-center text-5xl bold m-4">Quick Contact</h1>
    <div class="mt-5">
        <form action="" method="post" class="flex flex-col items-center gap-y-3">
            <input type="text" placeholder="Enter Your Name" class="w-2/3 lg:w-1/4"/><br/>
            <input type="text" placeholder="Enter Email Address" class="w-2/3 lg:w-1/4"/><br/>
            <input type="text" placeholder="Enter Your Phone" class="w-2/3 lg:w-1/4"/><br/>
            <textarea type="text" placeholder="Message" class="w-2/3 lg:w-1/4"></textarea><br/>
            <button type="submit" class="mt-auto bg-orange-500 text-white p-2 rounded-md w-2/3 lg:w-1/4">Submit</button>
        </form>
    </div>
</div>
