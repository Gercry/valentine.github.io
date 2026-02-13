<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day! 💕</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: repeating-conic-gradient(#ffb6c1 0% 25%, white 0% 50%) 50% / 40px 40px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
            position: relative;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .cute-dog {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
            position: relative;
        }

        .dog-face {
            width: 120px;
            height: 120px;
            background: white;
            border: 3px solid #333;
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
        }

        .dog-ear {
            width: 40px;
            height: 50px;
            background: white;
            border: 3px solid #333;
            border-radius: 50% 50% 0 0;
            position: absolute;
            top: -10px;
        }

        .dog-ear.left { left: 10px; transform: rotate(-20deg); }
        .dog-ear.right { right: 10px; transform: rotate(20deg); }

        .dog-eye {
            width: 25px;
            height: 25px;
            background: #333;
            border-radius: 50%;
            position: absolute;
            top: 35px;
        }

        .dog-eye.left { left: 25px; }
        .dog-eye.right { right: 25px; }

        .dog-eye::before {
            content: '';
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            left: 5px;
        }

        .dog-nose {
            width: 15px;
            height: 12px;
            background: #333;
            border-radius: 50% 50% 50% 50%;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .dog-mouth {
            width: 30px;
            height: 15px;
            border: 2px solid #333;
            border-top: none;
            border-radius: 0 0 50% 50%;
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hearts {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .heart {
            width: 20px;
            height: 20px;
            background: #ff69b4;
            transform: rotate(-45deg);
            animation: heartbeat 1.2s infinite;
        }

        .heart::before,
        .heart::after {
            content: '';
            width: 20px;
            height: 20px;
            background: #ff69b4;
            border-radius: 50%;
            position: absolute;
        }

        .heart::before { top: -10px; }
        .heart::after { left: 10px; }

        @keyframes heartbeat {
            0%, 100% { transform: rotate(-45deg) scale(1); }
            50% { transform: rotate(-45deg) scale(1.1); }
        }

        h1 {
            color: #c41e3a;
            font-size: 2.5em;
            margin: 20px 0;
            font-weight: bold;
        }

        .kaomoji {
            font-size: 1.5em;
            color: #ff69b4;
            margin: 10px 0;
        }

        .btn {
            background: #c41e3a;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 30px;
            font-size: 1.1em;
            cursor: pointer;
            margin: 10px;
            transition: all 0.3s;
            font-weight: bold;
        }

        .btn:hover {
            background: #a01729;
            transform: scale(1.05);
        }

        .btn-secondary {
            background: white;
            color: #c41e3a;
            border: 2px solid #c41e3a;
        }

        .btn-secondary:hover {
            background: #ffe0e6;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 30px 0;
        }

        .gallery-item {
            aspect-ratio: 1;
            background: linear-gradient(135deg, #ffd1dc, #ffb6c1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            border: 3px solid #ff69b4;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-note {
            color: #666;
            font-style: italic;
            margin-top: 10px;
            font-size: 0.9em;
        }

        .spotify-container {
            margin: 30px 0;
            padding: 20px;
            background: #f8f8f8;
            border-radius: 15px;
        }

        .spotify-placeholder {
            background: #1DB954;
            color: white;
            padding: 40px 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .spotify-note {
            font-size: 0.9em;
            color: #666;
            margin-top: 15px;
        }

        .letter {
            background: #fff9f9;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #ffb6c1;
            margin: 20px 0;
            text-align: left;
        }

        .letter-header {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .letter-heart {
            width: 25px;
            height: 25px;
            background: #ff69b4;
            transform: rotate(-45deg);
        }

        .letter-heart::before,
        .letter-heart::after {
            content: '';
            width: 25px;
            height: 25px;
            background: #ff69b4;
            border-radius: 50%;
            position: absolute;
        }

        .letter-heart::before { top: -12.5px; }
        .letter-heart::after { left: 12.5px; }

        .letter p {
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }

        .sad-cat {
            width: 100px;
            height: 100px;
            margin: 20px auto;
            position: relative;
        }

        .cat-body {
            width: 80px;
            height: 80px;
            background: #fff4e6;
            border: 3px solid #333;
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
        }

        .cat-ear {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 25px solid #333;
            position: absolute;
            top: -15px;
        }

        .cat-ear.left { left: 5px; }
        .cat-ear.right { right: 5px; }

        .cat-ear::after {
            content: '';
            width: 0;
            height: 0;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-bottom: 20px solid #fff4e6;
            position: absolute;
            top: 3px;
            left: -12px;
        }

        .cat-eye {
            width: 20px;
            height: 20px;
            background: #333;
            border-radius: 50%;
            position: absolute;
            top: 25px;
        }

        .cat-eye.left { left: 15px; }
        .cat-eye.right { right: 15px; }

        .cat-blush {
            width: 25px;
            height: 15px;
            background: #ffb6c1;
            border-radius: 50%;
            position: absolute;
            top: 35px;
        }

        .cat-blush.left { left: 5px; }
        .cat-blush.right { right: 5px; }

        .cat-mouth {
            width: 20px;
            height: 10px;
            border: 2px solid #333;
            border-top: none;
            border-radius: 0 0 50% 50%;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 2em;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Page 1: Welcome -->
    <div class="container page active" id="page1">
        <div class="cute-dog">
            <div class="hearts">
                <div class="heart"></div>
                <div class="heart" style="animation-delay: 0.2s;"></div>
                <div class="heart" style="animation-delay: 0.4s;"></div>
            </div>
            <div class="dog-face">
                <div class="dog-ear left"></div>
                <div class="dog-ear right"></div>
                <div class="dog-eye left"></div>
                <div class="dog-eye right"></div>
                <div class="dog-nose"></div>
                <div class="dog-mouth"></div>
            </div>
        </div>
        <h1>Happy Valentine's Day</h1>
        <div class="kaomoji">(੭｡╹▿╹｡)੭</div>
        <button class="btn" onclick="nextPage(2)">Next! ˆωˆ</button>
    </div>

    <!-- Page 2: Memories -->
    <div class="container page" id="page2">
        <h1 style="color: #ffb6c1; font-size: 2em;">Our Beautiful Memories</h1>
        <div class="gallery">
            <div class="gallery-item">📸</div>
            <div class="gallery-item">💕</div>
            <div class="gallery-item">🎮</div>
            <div class="gallery-item">🌸</div>
            <div class="gallery-item">✨</div>
            <div class="gallery-item">💖</div>
        </div>
        <p class="gallery-note">✨ Click the areas above to upload your precious memories together</p>
        <button class="btn" onclick="nextPage(3)">Next →</button>
    </div>

    <!-- Page 3: Song -->
    <div class="container page" id="page3">
        <h1 style="color: #9370db; font-size: 2em;">🎵 A Song Just For You</h1>
        <p style="margin: 20px 0; color: #666;">This is the song that always reminds me of you...</p>
        
        <div class="spotify-container">
            <div class="spotify-placeholder">
                <div style="font-size: 3em; margin-bottom: 10px;">♪</div>
                <div style="font-size: 1.2em; font-weight: bold;">Spotify Embed</div>
                <div style="font-size: 0.9em; margin-top: 10px;">Replace with your favorite song</div>
            </div>
        <p style="color: #666; margin: 20px 0; line-height: 1.6;">
            Every time I hear this song, I think of you and all our precious moments together 💗
        </p>
        </div>
     
        
        <button class="btn" onclick="nextPage(4)">Next →</button>
    </div>

    <!-- Page 4: Question -->
    <div class="container page" id="page4">
        <h1 style="color: #ff69b4; font-size: 1.8em;">Do you want to open it? "ヽ(>∀<☆)ノ"</h1>
        
        <div class="cat-body" style="margin: 40px auto;">
            <div class="cat-ear left"></div>
            <div class="cat-ear right"></div>
            <div class="cat-eye left"></div>
            <div class="cat-eye right"></div>
            <div class="cat-blush left"></div>
            <div class="cat-blush right"></div>
            <div class="cat-mouth"></div>
        </div>
        
        <button class="btn" onclick="nextPage(5)">Open it</button>
        <button class="btn btn-secondary" onclick="nextPage(6)">No ty</button>
    </div>

    <!-- Page 5: Letter -->
    <div class="container page" id="page5">
        <h1 style="color: #ffb6c1;">💌 Happy Valentine's Day!</h1>
        
        <div class="letter">
            <div class="letter-header">
                <div class="letter-heart"></div>
                <div class="letter-heart" style="animation-delay: 0.2s;"></div>
                <div class="letter-heart" style="animation-delay: 0.4s;"></div>
            </div>
            
            <p><strong>Dear,</strong></p>
            
            <p>HAPPY VALENTINE'S DAY MY BABY! I know you probably weren't expecting something like this, but I just wanted to show you how much you mean to me.</p>
            
            <p>Every day with you is a blessing. You make my days brighter, your laughter warms my heart, and your presence is the most beautiful gift I've ever received.</p>
            
            <p>Thank you for always being there for me, for understanding me just as I am, and for making life so much more beautiful.</p>
            
            <p>I love you more than words can say! 💕</p>
            
            <p style="text-align: right;"><em>With all my love,<br>Your [Your Name]</em></p>
        </div>
        
        <button class="btn" onclick="nextPage(1)">🔄 Start Over</button>
    </div>

    <!-- Page 6: Sad response -->
    <div class="container page" id="page6">
        <div class="sad-cat">
            <div class="cat-body">
                <div class="cat-ear left"></div>
                <div class="cat-ear right"></div>
                <div class="cat-eye left"></div>
                <div class="cat-eye right"></div>
                <div class="cat-blush left"></div>
                <div class="cat-blush right"></div>
            </div>
        </div>
        
        <h1 style="color: #ffb6c1; font-size: 1.8em;">Awh... Let's try again, Please..? >︿<</h1>
        
        <button class="btn" onclick="nextPage(4)">Again..?</button>
    </div>

    <script>
        function nextPage(pageNum) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));
            document.getElementById('page' + pageNum).classList.add('active');
        }

        // Optional: Add gallery click handlers
        document.addEventListener('DOMContentLoaded', function() {
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    alert('Tip: Replace this emoji with <img src="path/to/photo.jpg" style="width:100%;height:100%;object-fit:cover;border-radius:10px;">');
                });
            });
        });
    </script>
</body>
</html>