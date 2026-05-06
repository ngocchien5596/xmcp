<x-ui.overlay-card 
    :href="route('projects.show', $project['slug'])"
    :image="$project['image']"
    :title="$project['title']"
    :category="$project['category_label'] ?? $project['category']"
    class="h-full"
/>
