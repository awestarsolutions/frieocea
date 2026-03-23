# Design System Specification: Premium Logistics Editorial

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"The Precision Architect."** In the world of global logistics, excellence is found in the invisible: the seamless coordination of complex moving parts. This system rejects the cluttered "dashboard" aesthetic in favor of high-end editorial clarity.

We move beyond the "template" look by embracing **Intentional Asymmetry** and **Tonal Depth**. By utilizing massive white space (the 16 and 24 spacing tokens) and overlapping glass containers, we create a UI that feels architectural and "built," rather than just "rendered." We replace rigid grid lines with sophisticated background shifts to signal trust through calm, organized excellence.

---

## 2. Colors: Tonal Authority
This system utilizes a "Deep Navy" foundation to anchor the brand in stability, with "Logistics Orange" reserved for precision moments of action.

*   **Primary (#00263f):** Used for core navigational anchors and high-authority type.
*   **Secondary (#994700):** A sophisticated burnished orange for secondary accents.
*   **Logistics Orange (#fb7800):** Our "Action Signal," reserved for `secondary_container` and high-priority status indicators.

### The "No-Line" Rule
**Explicit Instruction:** Do not use 1px solid borders to define sections. Layout boundaries must be achieved through background color shifts. For example, a `surface_container_low` sidebar should sit against a `surface` background. If an edge feels "lost," use a subtle shadow or a 5% opacity `outline_variant` (The Ghost Border).

### Surface Hierarchy & Nesting
Treat the interface as a physical stack of premium materials:
1.  **Base Layer:** `surface` (#f8f9fa)
2.  **Sectional Layer:** `surface_container_low` (#f3f4f5)
3.  **Component Layer:** `surface_container_lowest` (#ffffff) for primary cards.
4.  **Interaction Layer:** `surface_bright` for hover states.

### The Glass & Gradient Rule
To achieve "Stripe-precision," use a `backdrop-blur` of 12px–20px on `surface_container_lowest` with 80% opacity. For primary CTAs, apply a linear gradient from `primary` (#00263f) to `primary_container` (#0b3c5d) at a 135-degree angle to provide a subtle metallic "sheen" that flat colors lack.

---

## 3. Typography: The Editorial Voice
We use **Manrope** for its geometric, modern authority and **Inter** for its functional precision.

*   **Display (Manrope, Bold):** Large scales (`display-lg` at 3.5rem) should be used with tight tracking (-0.02em) and generous leading. These are for high-level data summaries or hero statements.
*   **Headlines (Manrope, Semi-Bold):** Used to introduce modules. High contrast between `headline-lg` and `body-md` is encouraged to create a "magazine" feel.
*   **Body (Inter, Regular):** All body text uses Inter for maximum legibility. Use `body-lg` for introductory paragraphs and `body-md` for standard data.
*   **Labels (Inter, Medium/Bold):** Used for micro-data. Always uppercase with +0.05em letter spacing to ensure they feel like "stamps" of professional verification.

---

## 4. Elevation & Depth: Tonal Layering
We convey hierarchy through "Stacking" rather than "Shadowing."

*   **The Layering Principle:** To lift a card, do not reach for a shadow first. Place a `surface_container_lowest` card on a `surface_container_low` background. The subtle shift from #f3f4f5 to #ffffff creates a "natural lift."
*   **Ambient Shadows:** If a floating element (like a modal or dropdown) is required, use: `box-shadow: 0 10px 40px -10px rgba(11, 60, 93, 0.08)`. Note the use of the Deep Navy color in the shadow to keep it "on-brand" and organic.
*   **The "Ghost Border" Fallback:** If accessibility requires a stroke, use `outline_variant` at 15% opacity. It should be felt, not seen.
*   **Glassmorphism:** Navigation bars and floating action panels should use `surface_container_lowest` at 70% opacity with a `saturate(180%) backdrop-blur(20px)` effect.

---

## 5. Components: Precision Primitives

### Buttons
*   **Primary:** Gradient (`primary` to `primary_container`), `xl` roundedness (0.75rem), white text.
*   **Secondary:** `surface_container_high` background with `on_surface` text. No border.
*   **Tertiary:** Ghost style. No background; `primary` text color with an orange `secondary` underline on hover.

### Cards & Lists
*   **Constraint:** Absolute prohibition of divider lines.
*   **Execution:** Use the spacing scale (`3` for internal padding, `6` for external margins). Separate list items by alternating between `surface` and `surface_container_low` or simply using generous vertical white space.

### Input Fields
*   **Style:** `surface_container_lowest` background, `sm` (0.125rem) ghost border in `outline_variant`.
*   **Focus State:** The border transitions to `secondary_container` (Orange) at 100% opacity, providing a "precision" focus.

### Logistics-Specific Components
*   **The "Live Route" Tracker:** A glassmorphic float-bar using `primary_fixed_dim` for the track and `secondary` (Orange) for the "Active Progress" indicator.
*   **Status Badges:** Do not use heavy solid colors. Use a `surface_container_highest` background with a small 8px circle of the status color (e.g., Orange for "In Transit") next to the label.

---

## 6. Do's and Don'ts

### Do:
*   **Embrace Asymmetry:** Align a large `display-md` headline to the left, while leaving the right 30% of the container as empty `surface` space.
*   **Use the Spacing Scale:** Stick strictly to the increments. Use `16` (5.5rem) to separate major content blocks to allow the layout to "breathe."
*   **Color as Information:** Use the Logistics Orange (#FF7A00) *only* for things that are moving or require immediate human intervention.

### Don't:
*   **Don't use 100% Black:** Always use `on_background` (#191c1d) or `primary` (#00263f) for text to maintain the premium navy undertone.
*   **Don't use "Sci-Fi" Glows:** This is enterprise-grade. Avoid neon outer glows or pulsing animations. Motion should be linear, dampened, and purposeful (e.g., a subtle 200ms ease-out on hover).
*   **Don't Clutter:** If a screen feels full, it is wrong. Move secondary data into nested "Glassmorphic" drawers or tooltips.