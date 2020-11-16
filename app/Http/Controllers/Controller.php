<?php
// By Cristian Franco Bedoya
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("The Black Knight Always Triumphs! - Monty Python", 
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        // $totalQuotes = (count(Controller::$quotes));
        // $randomNumber = (rand(0,($totalQuotes-1)));
        // $randomQuote = Controller::$quotes[$randomNumber];
        // return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
        // In this case, we're creating random url of our images saved in aws s3
        $randomNumber = (rand(1,15));
        $url = "https://cfranco-randomquotes.s3.amazonaws.com/image{$randomNumber}.jpeg";
        $randomQuoteURL = $url;
        return response()->json(['quoteImageURL' => $randomQuoteURL, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function show()
    {
        // In this case, we're creating random url of our images saved in aws s3
        $randomNumber = (rand(1,15));
        $url = "https://cfranco-randomquotes.s3.amazonaws.com/image{$randomNumber}.jpeg";
        $randomQuoteURL = $url;
        return response()->json(['quoteImageURL' => $randomQuoteURL, 'server_ip' => gethostbyname(gethostname())]);
    }
}
