<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function apropos()
    {
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis deleniti mollitia animi eveniet cupiditate nostrum rem vitae praesentium, nisi, repudiandae et corrupti. Quae nisi error cupiditate magnam, ducimus labore suscipit, iure nostrum natus iusto pariatur inventore exercitationem tempora, quod modi! Vitae qui nam quidem tempora, rem iure at, maxime dolorem laborum exercitationem fugiat tenetur assumenda in ratione voluptate veniam temporibus? Voluptatibus velit eius ea magnam. Quos ipsum maiores possimus ipsa accusamus voluptate sapiente eos, minima, incidunt consequatur iste aliquid sequi, eveniet eum odit? Necessitatibus, perspiciatis eveniet! Tenetur itaque distinctio ducimus, praesentium impedit officiis qui nihil ab in minus explicabo, eligendi ut deserunt reprehenderit consequuntur! Ex doloribus sit ratione consequatur corrupti, inventore exercitationem minus suscipit culpa facere praesentium quasi asperiores error fuga deleniti numquam nam totam veniam enim ipsam alias ut saepe quas. Magni earum distinctio et. Est aperiam, repudiandae cupiditate quibusdam, sunt rerum ut architecto, beatae recusandae deserunt tempora quas. Cumque sit, nobis eaque animi rem sed. Quas quis aperiam repellat nesciunt veritatis eveniet sint deleniti porro voluptatibus molestiae nobis quidem quasi eligendi consequuntur esse distinctio reiciendis unde ducimus, iure odio! Doloribus atque dolor laboriosam rerum cumque ducimus sit, libero eos quos error voluptate? Culpa suscipit modi inventore quas numquam!';
        return view('apropos', compact('text'));
    }
}
