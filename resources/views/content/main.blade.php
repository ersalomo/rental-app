   @extends('landing-page.landing-page', ['title' => 'Welcome to our paradise'])
   @section('content')
       <section class="ftco-section bg-light">
           <div class="container">
               <div class="row">
                   @forelse($cars as $car)
                       <div class="col-md-4">
                           <x-card-car :car="$car" />
                       </div>
                   @empty
                   @endforelse
               </div>
               <div class="row mt-5">
                   <div class="col text-center">
                       {{ $cars->links('pagination::bootstrap-5') }}
                   </div>
               </div>
           </div>
       </section>
   @stop
