<style>
    .text-section {
        margin-top: 20px;
    }

    .text-description {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .text-description h2 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .text-description p {
        font-size: 14px;
        line-height: 1.4;
        color: #444;
    }
</style>

<div class="text-section">
    <div class="text-description">
        <div class="py-1 ">{!! $record->description !!}</div>
    </div>
</div>