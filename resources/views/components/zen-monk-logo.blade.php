<svg
    class="w-full h-auto transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6"
    viewBox="0 0 120 120"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    aria-label="Animated Zen Monk Logo"
>
    <style>
        .monk-arm {
            transition: opacity .3s;
        }
        .monk-hands-static {
            opacity: 0;
            transition: opacity .2s;
        }
    </style>
    <!-- Aura (animated pulsing circle) -->
    <g id="monk-aura">
        <circle cx="60" cy="60" r="36" fill="#F5A623" opacity="0.08">
            <animate attributeName="r" values="36;44;36" dur="2.5s" repeatCount="indefinite" />
            <animate attributeName="opacity" values="0.08;0.15;0.08" dur="2.5s" repeatCount="indefinite" />
        </circle>
    </g>

    <!-- Meditation cushion -->
    <g id="monk-cushion">
        <ellipse cx="60" cy="105" rx="28" ry="8" fill="#bbb" opacity="0.3" />
    </g>

    <!-- Monk body group -->
    <g id="monk-body">
        <!-- Robe -->
        <path d="M60 60 Q50 90 60 105 Q70 90 60 60" fill="#F5A623" stroke="#E08A1E" stroke-width="2" />
        <!-- Head -->
        <circle cx="60" cy="48" r="14" fill="#F9E4B7" stroke="#E0C48A" stroke-width="2" />
        <!-- Face (gentle smile) -->
        <path d="M54 53 Q60 57 66 53" stroke="#B08B4F" stroke-width="2" fill="none" stroke-linecap="round" />
        <!-- Eyes: closed by default, open on hover using CSS -->
        <g id="monk-eyes">
            <path class="monk-eye monk-eye-closed" d="M55 50 Q57 51 59 50" stroke="#B08B4F"
                stroke-width="1.5" fill="none" stroke-linecap="round" />
            <path class="monk-eye monk-eye-closed" d="M61 50 Q63 51 65 50" stroke="#B08B4F"
                stroke-width="1.5" fill="none" stroke-linecap="round" />
        </g>
    </g>

    <!-- Monk arms group -->
    <g id="monk-arms">
        <!-- Left arm (closed) -->
        <path class="monk-arm monk-arm-closed" d="M54 72 Q48 78 60 80" stroke="#E0C48A" stroke-width="4"
            fill="none" stroke-linecap="round" />
        <!-- Right arm (closed) -->
        <path class="monk-arm monk-arm-closed" d="M66 72 Q72 78 60 80" stroke="#E0C48A" stroke-width="4"
            fill="none" stroke-linecap="round" />
    </g>

    <!-- Monk hands group -->
    <g id="monk-hands">
        <!-- Animated hands (breathing) -->
        <ellipse id="hands" class="monk-hands-breathing" cx="60" cy="72" rx="8" ry="3" fill="#F9E4B7">
            <animate attributeName="cy" values="72;75;72" dur="2s" repeatCount="indefinite" />
            <animate attributeName="rx" values="8;10;8" dur="2s" repeatCount="indefinite" />
        </ellipse>
        <!-- Static hands for open arms, hidden by default, shown on hover -->
        <ellipse id="hands-static" class="monk-hands-static" cx="60" cy="72" rx="10" ry="3"
            fill="#F9E4B7" />
    </g>
</svg>