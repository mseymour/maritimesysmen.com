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
        $date = new \DateTime();
        $current_month = (int)$date->format('n');
        if($current_month <= 8) {
          $next_year = (int)$date->format('Y');
          $current_year = $next_year - 1;
        } else {
          $current_year = (int)$date->format('Y');
          $next_year = $current_year + 1;
        }

        //$menu->add('Home', ['route'  => 'home.page'])->append('<small>homu</small>');
        // First half
        $menu->add('About Us', ['route'  => 'page.about'])->append('<small>Maritimes Y&rsquo;s Men</small>');
        $menu->add('Our Clubs', ['route'  => 'page.clubs'])->append('<small>From Woodstock to Glace Bay</small>');
        // Second half (reversed)
        $menu->add('Regional Convention', 'events/2016-maritime-regional-convention')->append('<small>Pictou 2016</small>')->active('events/2016-maritime-regional-convention');
        $menu->add('Regional Team', ['route'  => 'page.team'])->append("<small>$current_year&ndash;$next_year</small>");
      });
      Menu::make('footer_region', function($menu) {
        $menu->add('Home', ['route'  => 'home.page']);
        $menu->add('About Us', ['route'  => 'page.about']);
        $menu->add('Our Clubs', ['route'  => 'page.clubs']);
        $menu->add('Regional Team', ['route'  => 'page.team']);
        $menu->add('Regional Convention', 'events/2016-maritime-regional-convention');
        $menu->add('Region Events', ['route' => 'page.events']);
      });
      return $next($request);
    }
}