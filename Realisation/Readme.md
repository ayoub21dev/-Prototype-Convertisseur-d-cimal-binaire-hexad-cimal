Mini CLI Binary Calculator 
This is a simple PHP Command Line Interface (CLI) project that performs bitwise logical operations on numbers and saves the results to a JSON file.

Key Features
Calculates AND, OR, XOR, and NOT operations.

Displays results in both Decimal and Binary formats.

Reads input from the command line.

Reads input from a file (samples/input.txt).

Saves calculation results to a JSON file.

---How to Use----
Requirements
You need to have PHP and Composer installed on your machine.

Method 1: CLI Calculation
To perform a calculation and see the output directly in your terminal, use this command:

Bash

composer convert [first_number] [second_number]
Example:

Bash

composer convert 5 3
Method 2: JSON Saving
To save the calculation results to a JSON file, first, make sure you've entered your two numbers into the samples/input.txt file. Then, run this command:

Bash

composer save
The output will be saved in samples/output.json

 ----Project Structure---
bin/: Contains the executable scripts (calc.php and save.php).

src/: Holds the main project classes (Calculator, Converter, OutputHandler).

samples/: Stores the input and output files (input.txt and output.json).

composer.json: The project configuration file with all custom scripts.