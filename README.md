# Café — a NimbusCMS theme

A warm small-business theme for [NimbusCMS](https://github.com/NimbusCMS/nimbus) —
a menu or catalogue, an about page, a landing hero. Plain PHP templates, one
stylesheet, **no build step**. Extracted from the Nimbus demo (Fern & Kettle). An
official theme.

## Look

A landing hero with featured items, a menu grouped by section with prices, and
clean info pages. One stylesheet handles light and dark.

## Install

A theme is a directory. Drop it into your site's `themes/` folder as `cafe/`:

```
git clone https://github.com/NimbusCMS/nimbus-theme-cafe themes/cafe
```

Then pick it in the admin (**Settings → Theme**), or set it in `config/theme.php`:

```php
<?php return 'cafe';
```

## What it expects

- a **`home`** singleton for the landing page (`entry-home`) — hero + featured;
- a **`menu`** collection whose items have a **section**, a **price**, and an
  optional **featured** flag (`collection-menu`);
- a **`pages`** collection for about/info pages (`entry`). Pairs well with the
  official **Markdown** plugin for page bodies.

Rename the collection templates to fit any small-business catalogue — a shop, a
services list, a portfolio.

## Structure

```
theme.json          # metadata + template map
templates/*.php     # layout, header, footer, entry-home, entry,
                    # collection-menu, markdown, 404
assets/app.css      # the one stylesheet, served at /theme/assets/app.css
```

MIT licensed.
