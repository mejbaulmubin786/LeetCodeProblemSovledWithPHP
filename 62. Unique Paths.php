function uniquePaths($m, $n) {
    // m x n ডাইনামিক প্রোগ্রামিং টেবিল তৈরি করি
    $dp = array_fill(0, $m, array_fill(0, $n, 0));

    // প্রথম সারি এবং প্রথম কলামে যাওয়ার একমাত্র উপায় হল সরাসরি একদিকেই যাওয়া
    for ($i = 0; $i < $m; $i++) {
        $dp[$i][0] = 1;
    }

    for ($j = 0; $j < $n; $j++) {
        $dp[0][$j] = 1;
    }

    // বাকি গ্রিডে প্রতিটি সেলের জন্য সম্ভাব্য পথের সংখ্যা নির্ণয় করা
    for ($i = 1; $i < $m; $i++) {
        for ($j = 1; $j < $n; $j++) {
            // প্রত্যেকটি সেলে পৌঁছানোর উপায় হবে উপরের সেল এবং বামপাশের সেলের যোগফল
            $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
        }
    }

    // গন্তব্যস্থলে পৌঁছানোর সম্ভাব্য পথের সংখ্যা
    return $dp[$m - 1][$n - 1];
}
