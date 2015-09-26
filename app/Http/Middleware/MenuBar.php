<?php
namespace App\Http\Middleware;

use Closure;
use Menu;

class MenuBar
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      Menu::make('main', function($menu) {
        $years = region_year();
        //$menu->add('Home', ['route'  => 'home.page'])->append('<small>homu</small>');
        // First half
        $menu->add('About Us', ['route'  => 'about'])->append('<small>Maritimes Y&rsquo;s Men</small>');
        $menu->add('Our Clubs', ['route'  => 'clubs.index'])->append('<small>From Woodstock to Glace Bay</small>')->active('clubs/*');
        // Second half (reversed)
        $menu->add('Regional Convention', 'events/2016-maritime-regional-convention')->append('<small>Pictou 2016</small>')->active('events/2016-maritime-regional-convention');
        $menu->add('Regional Team', ['route'  => 'regional-team.index'])->append("<small>{$years['current_year']}&ndash;{$years['next_year']}</small>")->active('regional-team/*');
      });
      Menu::make('footer_region', function($menu) {
        $menu->add('Home', ['route'  => 'home']);
        $menu->add('About Us', ['route'  => 'about']);
        $menu->add('Our Clubs', ['route'  => 'clubs.index']);
        $menu->add('Regional Team', ['route'  => 'regional-team.index']);
        $menu->add('Regional Convention', 'events/2016-maritime-regional-convention');
        $menu->add('Region Events', ['route' => 'events.index']);
      });
      return $next($request);
    }
}