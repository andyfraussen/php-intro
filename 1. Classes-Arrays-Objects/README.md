# PHP - Classes / Objects / Arrays and such

## Intro
This exercise will teach you the basics of PHP Programming , use of arrays, objects & classes are very important, so start with that. We will follow up after the holidays with the next steps.

## Setup

1. Create a repository php-intro
1. Follow the instructions step by step: commit & push at the end of every step.
1. When the instruction starts with README, write what’s asked in the README of your repository.
1. Create home.php.

## Instructions
1. Create an array, an associative array and an object in home.php.
1. Write a for-loop that adds an item to all of the above.
1. Write an if-statement that has a 20% chance to edit a random item of all of the above.
1. README: What are the differences between an array, an associative array and an object?
1. Write a function that saves all of the above in the session.
1. Make sure this function executes any time something changes in any of the above.
1. Create a class called Blackjack.
1. Game rules:
    - Cards are between 1-11 points.
    - Getting more than 21 points, means that you lose.
    - Getting 21 points with your first two cards, means you have a blackjack.
    - To win, you need to have more points than the dealer, but not more than 21.
    - The dealer is obligated to keep taking cards until they have at least 15 points.
1. Add three methods to this class:
    - Hit
    - Stand
    - Surrender
1. Hit should add a card between 1-11.
1. Stand should end your turn, and start the dealers turn. (Your point total is saved.)
1. Surrender should make you surrender the game. (Dealer wins.)
1. Add a property to this class called score. This property should have the value of the player's score at all times.
1. Instantiate the class twice, once for the player and once for the dealer.
1. Create a button on home.php that starts the game when pushed, it should go to game.php.
1. On game.php instantiate the Blackjack class twice, insert it into a player variable and a dealer variable
1. Save these instances in the session (you're gonna need them)
1. Use forms to send to the game.php page what the player's action is. (i.e. hit/stand/surrender)
1. Use the class' methods to react to these actions.
1. The final result should be the following:
1. When you hit the server should draw a card between 1-11, and add it to your total score. If you reach >21, then the page should tell you you lost. If you stand before that, the dealer starts drawing cards until he reaches >15. The server then needs to check the difference between your result and that of the dealer. The person with the biggest score (that is still lower than 22) wins the hand (If equal the dealer wins). As a final option: at any point you need to be able to click surrender after which the page tells you you lost and simulates the dealer's score.

If you can finish this exercise and understandd everything you coded afterwards, then you have a decent understanding of the OOP programming in PHP and it's basics & strengths (aka Classes, Objects, ...) Next up we'll look into basic PHP functions that you'll recognize from JS