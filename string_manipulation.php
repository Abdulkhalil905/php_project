<?php
function reverseWordsInSentences($paragraph) {
    // Split the paragraph into sentences using period, exclamation, or question marks
    $sentences = preg_split('/([.!?]+)/', $paragraph, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    
    $reversedSentences = [];

    // Loop through the sentences
    for ($i = 0; $i < count($sentences); $i += 2) {
        $sentence = trim($sentences[$i]);

        // Reverse the words in the sentence
        $words = explode(' ', $sentence);
        $reversedWords = array_reverse($words);
        $reversedSentence = implode(' ', $reversedWords);
        
        // Add the punctuation back
        $punctuation = isset($sentences[$i + 1]) ? $sentences[$i + 1] : '';
        $reversedSentences[] = $reversedSentence . $punctuation;
    }

    // Return the final result
    return implode(' ', $reversedSentences);
}

// Get user input
$paragraph = readline("Enter a paragraph: ");

// Process and print the result
$result = reverseWordsInSentences($paragraph);
echo "Reversed sentences: " . $result . "\n";
?>
