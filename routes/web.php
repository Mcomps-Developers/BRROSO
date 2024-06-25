<?php

use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\BlogDetailsComponent;
use App\Livewire\CausesComponent;
use App\Livewire\ComingSoonComponent;
use App\Livewire\ContactComponent;

use App\Livewire\DonationsDetailsComponent;
use App\Livewire\EventDetailsComponent;
use App\Livewire\EventsComponent;
use App\Livewire\FaqComponent;
use App\Livewire\FoodInterventionComponent;
use App\Livewire\GalaryComponent;
use App\Livewire\HealthInterventionComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use App\Livewire\NutritionInterventionComponent;
use App\Livewire\PrivacyPolicyComponent;
use App\Livewire\ProtectionInterventionComponent;
use App\Livewire\RegisterComponent;
use App\Livewire\ShelterInterventionComponent;
use App\Livewire\TeamComponent;
use App\Livewire\TermsComponent;
use App\Livewire\TestimonialsComponent;
use App\Livewire\WashInterventionComponent;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class)->name('about');
Route::get('/blog',BlogComponent::class)->name('blog');
Route::get('/blog-details',BlogDetailsComponent::class)->name('blog.details');
Route::get('/contact',ContactComponent::class)->name('contact');

Route::get('/donation-details',DonationsDetailsComponent::class)->name('donation.details');
Route::get('/events',EventsComponent::class)->name('events');
Route::get('/event-details',EventDetailsComponent::class)->name('event.details');
Route::get('/faq',FaqComponent::class)->name('faq');
Route::get('galary',GalaryComponent::class)->name('galary');
Route::get('/privacy',PrivacyPolicyComponent::class)->name('privacy.policy');
Route::get('/team',TeamComponent::class)->name('team');
Route::get('terms',TermsComponent::class)->name('terms.and.conditions');
Route::get('/testimonials',TestimonialsComponent::class)->name('testimonials');
Route::get('/register',RegisterComponent::class)->name('register');
Route::get('/login',LoginComponent::class)->name('login');
Route::get('/causes',CausesComponent::class)->name('causes');
Route::get('/food-intervention',FoodInterventionComponent::class)->name('food');
Route::get('/wash-intervention',WashInterventionComponent::class)->name('wash');
Route::get('/health-intervention',HealthInterventionComponent::class)->name('health');
Route::get('/protection-intervention',ProtectionInterventionComponent::class)->name('protection');
Route::get('/shelter-intervention',ShelterInterventionComponent::class)->name('shelter');
Route::get('/nutrition-intervention',NutritionInterventionComponent::class)->name('nutrition');
Route::get('/coming-soon',ComingSoonComponent::class)->name('coming.soon');

