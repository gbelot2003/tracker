<template>
    <div class="dropdown">
        <div class="dropdown-trigger">
            <button class="button" onclick="javascript:document.querySelector('.dropdown').classList.toggle('is-active')"
                onblur="javascript:document.querySelector('.dropdown').classList.toggle('is-active')" aria-haspopup="true"
                aria-controls="dropdown-menu">
                <span>Dropdown button</span>
                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
                <a href="#" onmousedown="javascript:alert('clicked')" class="dropdown-item">
                    Dropdown item
                </a>
                <a class="dropdown-item" onmousedown="javascript:alert('clicked')">
                    Other dropdown item
                </a>
                <a href="#" onmousedown="javascript:alert('clicked')" class="dropdown-item is-active">
                    Active dropdown item
                </a>
                <a href="#" onmousedown="javascript:alert('clicked')" class="dropdown-item">
                    Other dropdown item
                </a>
                <hr class="dropdown-divider">
                <a href="#" onmousedown="javascript:alert('clicked')" class="dropdown-item">
                    With a divider
                </a>
            </div>
        </div>
    </div>
</template>
