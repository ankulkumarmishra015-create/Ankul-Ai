<?php
declare(strict_types=1);

session_start();

$appName = "Ankul AI";
$appVersion = "1.0.0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Ankul AI - Your personal AI assistant"
    >

    <title><?= htmlspecialchars($appName) ?></title>

    <link
        rel="stylesheet"
        href="assets/style.css"
    >
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->

    <aside class="sidebar" id="sidebar">

        <div class="sidebar-header">

            <div class="brand">
                <div class="brand-logo">A</div>

                <span>
                    Ankul AI
                </span>
            </div>

            <button
                class="icon-btn"
                id="closeSidebar"
                aria-label="Close sidebar"
            >
                ×
            </button>

        </div>


        <button
            class="new-chat-btn"
            id="newChatBtn"
        >
            <span>＋</span>
            New chat
        </button>


        <div class="history-section">

            <p class="section-title">
                Recent chats
            </p>

            <div id="chatHistory">

                <div class="empty-history">
                    No recent chats
                </div>

            </div>

        </div>


        <div class="sidebar-bottom">

            <button class="sidebar-item">
                ⚙️
                <span>Settings</span>
            </button>

            <button class="sidebar-item">
                ℹ️
                <span>About Ankul AI</span>
            </button>

        </div>

    </aside>


    <!-- MAIN -->

    <main class="main">

        <!-- TOP BAR -->

        <header class="topbar">

            <button
                class="icon-btn"
                id="menuBtn"
                aria-label="Open menu"
            >
                ☰
            </button>


            <div class="model-selector">

                <strong>
                    Ankul AI
                </strong>

                <span>
                    AI Assistant
                </span>

            </div>


            <div class="top-actions">

                <button
                    class="icon-btn"
                    id="themeBtn"
                    aria-label="Toggle theme"
                >
                    🌙
                </button>

            </div>

        </header>


        <!-- CHAT AREA -->

        <section
            class="chat-container"
            id="chatContainer"
        >

            <!-- WELCOME -->

            <div
                class="welcome-screen"
                id="welcomeScreen"
            >

                <div class="welcome-logo">
                    A
                </div>

                <h1>
                    Hello, I'm Ankul AI
                </h1>

                <p>
                    Your personal AI assistant.
                    Ask me anything.
                </p>


                <div class="suggestions">

                    <button
                        class="suggestion-card"
                        data-prompt="Explain artificial intelligence in simple words."
                    >
                        <span>💡</span>

                        <div>
                            <strong>Learn something</strong>
                            <small>
                                Explain a topic simply
                            </small>
                        </div>
                    </button>


                    <button
                        class="suggestion-card"
                        data-prompt="Help me write a professional program."
                    >
                        <span>💻</span>

                        <div>
                            <strong>Write code</strong>
                            <small>
                                Create or debug code
                            </small>
                        </div>
                    </button>


                    <button
                        class="suggestion-card"
                        data-prompt="Give me some creative project ideas."
                    >
                        <span>✨</span>

                        <div>
                            <strong>Generate ideas</strong>
                            <small>
                                Explore new possibilities
                            </small>
                        </div>
                    </button>


                    <button
                        class="suggestion-card"
                        data-prompt="Help me create a study plan."
                    >
                        <span>📚</span>

                        <div>
                            <strong>Study help</strong>
                            <small>
                                Learn more effectively
                            </small>
                        </div>
                    </button>

                </div>

            </div>


            <!-- MESSAGES -->

            <div
                class="messages"
                id="messages"
            >
            </div>

        </section>


        <!-- INPUT -->

        <section class="composer-wrapper">

            <div class="composer">

                <button
                    class="composer-btn"
                    id="attachBtn"
                    aria-label="Attach file"
                >
                    ＋
                </button>


                <textarea
                    id="messageInput"
                    rows="1"
                    placeholder="Ask Ankul AI..."
                    maxlength="10000"
                ></textarea>


                <button
                    class="composer-btn voice-btn"
                    id="voiceBtn"
                    aria-label="Voice input"
                >
                    🎙️
                </button>


                <button
                    class="send-btn"
                    id="sendBtn"
                    aria-label="Send message"
                    disabled
                >
                    ➤
                </button>

            </div>


            <p class="disclaimer">
                Ankul AI can make mistakes.
                Verify important information.
            </p>

        </section>

    </main>

</div>


<!-- TOAST -->

<div
    id="toast"
    class="toast"
>
    <span id="toastMessage"></span>
</div>


<script src="assets/app.js"></script>

</body>
</html>
