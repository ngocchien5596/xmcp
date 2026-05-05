# PLAN-laravel-migration

**Mục tiêu**: Chuyển 100% project frontend hiện tại (Next.js/React/TypeScript) sang Laravel (PHP/Blade), giữ nguyên giao diện Tailwind CSS và Design System.

## PHẦN 1 — KIỂM TRA DỰ ÁN HIỆN TẠI
- **Tình trạng**: Project hiện tại là Next.js thuần (`package.json`, `next.config.ts`), chưa hề cài đặt Laravel hay PHP.
- **Hành động tiếp theo**: Khởi tạo project Laravel mới hoặc chép đè cấu trúc Laravel vào thư mục hiện tại, sau đó copy assets/Tailwind sang.

## PHẦN 2 — NGUYÊN TẮC CHUYỂN ĐỔI
1. React Component → Blade Component / Blade Partial
2. React Props → Blade variables / component attributes
3. TypeScript interface → PHP array structure hoặc ViewModel DTO
4. Next.js routes → Laravel routes
5. Next.js dynamic routes `[slug]` → Laravel route parameter `{slug}`
6. `generateMetadata` → Laravel SEO data truyền vào layout
7. `next/image` → thẻ `img` chuẩn có lazy loading, width/height, alt
8. data/mock TS → config PHP array hoặc database-ready seed data
9. Tailwind class giữ nguyên tối đa
10. Không hardcode nội dung trong component
11. Layout, section, card, UI base phải tách rõ
12. Component phải reusable
13. Code phải chạy được trong Laravel

## PHẦN 3 — CẤU TRÚC THƯ MỤC LARAVEL MỚI
Cấu trúc sẽ được tạo chuẩn theo Blade:

```text
resources/views/
  layouts/app.blade.php
  partials/header.blade.php, footer.blade.php, mobile-nav.blade.php
  pages/
    home.blade.php, introduction.blade.php, company-info.blade.php, quality-policy.blade.php, contact.blade.php
    products/index.blade.php, show.blade.php
    news/index.blade.php, show.blade.php
  sections/
    home/...
    common/...
    products/...
    news/...
    company/...
    documents/...
  components/
    ui/...
    cards/...

app/Http/Controllers/
  HomeController.php, PageController.php, ProductController.php, NewsController.php, DocumentController.php, ContactController.php

config/
  site.php, navigation.php, products.php, news.php, partners.php, documents.php
```

## PHẦN 4 — ROUTING
Tạo `routes/web.php` với các route sau:
- GET `/` → `HomeController@index` (name: `home`)
- GET `/gioi-thieu` → `PageController@introduction` (name: `introduction`)
- GET `/thong-tin-cong-ty` → `PageController@companyInfo` (name: `company.info`)
- GET `/san-pham` → `ProductController@index` (name: `products.index`)
- GET `/san-pham/{slug}` → `ProductController@show` (name: `products.show`)
- GET `/tin-tuc` → `NewsController@index` (name: `news.index`)
- GET `/tin-tuc/{slug}` → `NewsController@show` (name: `news.show`)
- GET `/chinh-sach-chat-luong` → `DocumentController@index` (name: `quality-policy.index`)
- GET `/lien-he` → `ContactController@index` (name: `contact.index`)

## PHẦN 5 — DATA CONFIG
- Sẽ tạo các file config trong thư mục `config/` (`products.php`, `news.php`, `site.php`, `navigation.php`, `partners.php`, `documents.php`).
- Dữ liệu config dạng PHP Array, sẵn sàng chuyển lên Database sau này.

## PHẦN 6 — CONTROLLER LOGIC
- Các controller sẽ query data từ `config()` hoặc Database.
- Truyền data qua biến vào View.

## PHẦN 7 — BLADE LAYOUT
- `resources/views/layouts/app.blade.php` sẽ chứa HTML5 boilerplate, SEO meta tags, Open Graph, Asset loading (Vite).
- Sử dụng `@yield('content')`.

## PHẦN 8 & 9 — COMPONENT MAPPING & PAGE TEMPLATE
- Map trực tiếp từ JSX sang Blade syntax (`@if`, `@foreach`, `{{ $var }}`).
- Ghép các sections vào đúng page layout theo danh sách.

## PHẦN 10 & 11 — TAILWIND & JS VANIILA
- Cài đặt Laravel Vite plugin.
- Cấu hình TailwindCSS content scan thư mục `resources/views/**/*.blade.php`.
- Chuyển logic React Hooks sang JS thuần (Vanilla JS) trong `resources/js/app.js`.

## PHẦN 12, 13, 14 — SEO, ACCESSIBILITY & PERFORMANCE
- Truyền biến `$seo` từ mọi Controller.
- Bổ sung alt, aria attributes.
- Tối ưu loading ảnh và assets.

## PHẦN 15 — OUTPUT CODE
- [ ] Thực hiện cấu trúc thư mục và khởi tạo Laravel
- [ ] Viết Routes & Controllers
- [ ] Viết Config data
- [ ] Viết Layout & Partial Views
- [ ] Viết Blade Components (UI, Cards, Sections)
- [ ] Lắp ráp Page Templates
- [ ] Tích hợp TailwindCSS & Vite
- [ ] Viết JS Vanilla thay thế React

## PHẦN 16 — CHECKLIST SAU MIGRATION
- `php artisan route:list`
- `php artisan view:clear`
- `npm install && npm run dev`
- Trải nghiệm toàn bộ 9 trang yêu cầu.
